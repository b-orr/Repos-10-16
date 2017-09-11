<?php

namespace App\Http\Controllers;

use App\User;
use Storage;
use App\Drawings;
use App\Projects;
use App\Folders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use EddTurtle\DirectUpload\Acl;
use EddTurtle\DirectUpload\InvalidAclException;
use EddTurtle\DirectUpload\InvalidOptionException;
use EddTurtle\DirectUpload\InvalidRegionException;
use EddTurtle\DirectUpload\Region;
use EddTurtle\DirectUpload\Signature;
use Imagick;
use DB;
use Aws\Lambda\LambdaClient;
use Aws\S3\S3Client;

class DrawingsController extends Controller
{

        public $folders;
        public $drawings;
        public $data;
        public $user;
        public $tenant;



	public function __construct()
	{
		
			if(request()->segment(1)!='lambda'){
		    $this->middleware('auth');
		    $this->middleware('role:super,tenant');
		    
		    $this->middleware(function ($request, $next) {
		            $this->data['tenant'] = $this->tenant= User::findTenant(Auth::user());
		            $this->data['user'] = $this->user= Auth::user();
		            $this->data['projects'] = $this->tenant->projects->where('status', 'Award');
		            return $next($request);
		    });
	   }
	    
	    $this->data['site_area']='Admin';
	    
	    include(app_path() . '/s3signature/Acl.php');
	    include(app_path() . '/s3signature/InvalidAclException.php');
	    include(app_path() . '/s3signature/InvalidOptionException.php');
	    include(app_path() . '/s3signature/InvalidRegionException.php');
	    include(app_path() . '/s3signature/Region.php');
	    include(app_path() . '/s3signature/Signature.php');
	 
	  }
		
     
    public function index($id,$folder_id)
    {
        $this->data['site_area'] = 'Drawings';
        $this->data['project_id'] = $id;
        $this->data['folder_id'] = $folder_id;
        
      
        $this->data['upload'] = new Signature(
             env('AWS_KEY'),
             env('AWS_SECRET'),
             env('AWS_BUCKET'),
             env('AWS_REGION')
        );

        $this->data['UploadedFiles'] =  $this->tenant->projects->find($id)->folders->find($folder_id)->uploads;

        $this->data['drawings'] = $this->tenant->projects->find($id)->folders->find($folder_id)->drawings;
                  
        return view('drawings.drawingList', $this->data);
       
    }
    
    function fast_request($url)
    {
        $parts=parse_url($url);
        $fp = fsockopen($parts['host'],isset($parts['port'])?$parts['port']:80,$errno, $errstr, 30);
        $out = "GET ".$parts['path']." HTTP/1.1\r\n";
        $out.= "Host: ".$parts['host']."\r\n";
        $out.= "Content-Length: 0"."\r\n";
        $out.= "Connection: Close\r\n\r\n";
    
        fwrite($fp, $out);
        fclose($fp);
    }
    
    
    public function lambda_status($project_id, $folder_id, $file_id){
    	$total = (int)$this->tenant->projects->find($project_id)->folders->find($folder_id)->drawings->where('drw_upload_id', $file_id)->count();    
    	
    	$total_pages =  $this->tenant->projects->find($project_id)->folders->find($folder_id)->drawings->where('drw_upload_id', $file_id);
     
    	
    	if($total>0){
    	
    	
    		if($total==$total_pages[0]->drw_discipline_id){
    		
    			echo '<script>location.reload();</script>';
    		}
    		
    		
    		echo '<img src="https://c.s-microsoft.com/en-us/CMSImages/minifindstore_spin.gif?version=45117834-d17e-3a16-5765-62399907b530" height="20px">  ' . $total . ' of '. $total_pages[0]->drw_discipline_id .' pages processed';
    	}else {
    		echo '<img src="https://c.s-microsoft.com/en-us/CMSImages/minifindstore_spin.gif?version=45117834-d17e-3a16-5765-62399907b530" height="20px">  Please wait, document is preparing...';
    	}
    }
    
    
    
    public function lambda_loop($page_nb, $filename, $folder_id, $project_id, $file_id){
    	
	    for($i=0;$i<$page_nb;$i++){
	    $this->fast_request(url('lambda/'.$i . '/' . $filename . '/' . $folder_id . '/' . $project_id . '/' . $file_id . '/' . $page_nb));
	    
	    }
    
    }
    
    public function lambda($id, $filename, $folder_id, $project_id, $file_id, $page_nb){
		
     
     $client= LambdaClient::factory(array( 
     																			'credentials' => array( 
     																						'key' => env('AWS_KEY'), 
     																						'secret' => env('AWS_SECRET'), 
     																						), 
     																			'region' => env('AWS_REGION'), 
     																			'version' => 'latest' ));
    
    
	    $args = [ 
	    
	    "bucketNameFrom"=>"pronovosrubixcube/drawings", 
	    "bucketName"=>"pronovosrubixcube/split/file-" . $filename, 
	                     "folderName"=>"", 
	                    "pdffileName"=>$filename,
	                    "pdfNumber"=>$id
	                 ];
     
      $payload = json_encode($args);
    
	    $result = $client->invoke(array(
	         'FunctionName' => 'Pdf2PngCrop',
	                    'Payload' => $payload
	    ));  
	    
	    
	    
	    $args = [
	             "bucketName"=>"pronovosrubixcube/split/file-" . $filename, 
	            "imagefileName"=>$filename . $id . "_crop.png"
	         ];
	
	    $payload = json_encode($args);
	    
	    $result = $client->invoke(array(
	         'InvocationType' => 'RequestResponse',
	         'FunctionName' => 'tesseractLambda-dev-hello',
	          'Payload' => $payload
	    ));  
	    
	
	    
	    $tsr =  str_replace(' ', '\n', $result['Payload']->__toString());
	    
	    $tsr =  str_replace('"', '', $tsr);
	    
	    
	  
	    $words  = explode('\n',  $tsr);
	    
	    $longestWordLength = 0;
	    $longestWord = '';
	    
	    foreach ($words as $word) {
	       $word = trim($word);
 
	       if ( $longestWord=='' && (
	       			strtolower(substr($word, 0, 2)) === 'a0' || 
   						strtolower(substr($word, 0, 2)) === 'c0' ||
   						strtolower(substr($word, 0, 2)) === 's0' || 
   						strtolower(substr($word, 0, 2)) === 'a1' || 
							strtolower(substr($word, 0, 2)) === 'c1' ||
							strtolower(substr($word, 0, 2)) === 's1' || 
	       			strtolower(substr($word, 0, 1)) === '0' 
	       			) )
	       			 {
	          $longestWordLength = strlen($word);
	          $longestWord = $word;
	       }
	    }
	    
 		 
 		 if ( $longestWord==''){
 		 	foreach ($words as $word) {
 		 		       $word = trim($word);
	 							$word = str_replace('shee', '', strtolower($word));
	 		       if ( $longestWord=='' && (
	 		       			strtolower(substr($word, 0, 1)) === 'a' || 
	 	  						strtolower(substr($word, 0, 1)) === 'c' ||
	 	  						strtolower(substr($word, 0, 1)) === 's' 
	 		       			) )
	 		       			 {
	 		          $longestWordLength = strlen($word);
	 		          $longestWord = $word;
	 		       }
	 		    }
	 	
 		 
 		 }
 		 
 		 
 		 if ( $longestWord==''){
 		  	foreach ($words as $word) {
 		  	 $word = trim($word);
 		  	 		$word = str_replace('shee', '', strtolower($word));
 		  	 		$word = str_replace('no', '', strtolower($word));
 		  	 		$word = str_replace('nu', '', strtolower($word));
 		  	   if (strlen($word) > $longestWordLength) {
 		  	      $longestWordLength = strlen($word);
 		  	      $longestWord = $word;
 		  	   }
 		  	}
 		 
 		  
 		  }
	    
	    $proj = new Projects;
	    
	    $proj->find($project_id)->folders->find($folder_id)->drawings()->save(new Drawings([
																																					'drw_upload_id'=>$file_id,
																																					'drw_discipline_id'=>$page_nb,
																																					'drawing_name'=>'', 
																																					'description'=> $longestWord,
																																					'image_thumb'=> "/split/file-" . $filename .'/' .$filename . $id . '_crop.png',
																																					'image_org'=> "/split/file-" . $filename .'/' .$filename . $id . '.png']));
																																					
	   $proj->find($project_id)->folders->find($folder_id)->uploads->find($file_id)->update(['processed'=>1]); 																																															
    }

   

  	public function thumbnailView($id, $folder_id, $file_id) {
  		
  		 $this->data['drawings'] =  $this->tenant->projects->find($id)->folders->find($folder_id)->drawings->where('drw_upload_id', $file_id);
  		 $this->data['project'] =  $this->tenant->projects->find($id);
  		 
  		 return view('drawings.thumbnailView', $this->data);
  		
  	}
  	
  	
  	public function drawingView($id, $folder_id, $drawing_id) {
  		
  		 $this->data['drawings'] =  $this->tenant->projects->find($id)->folders->find($folder_id)->drawings->find($drawing_id);
  		 $this->data['project'] =  $this->tenant->projects->find($id);
  		 
  		 return view('drawings.drawingView', $this->data);
  		
  	}
  	
  	
  	
  	public function processFile($id, $folder_id, $file_id) {
  	   			 
  			$this->tenant->projects->find($id)->folders->find($folder_id)->uploads->find($file_id)->update(['processed'=>2]);

    		set_time_limit(1000);
 				$i=0;
 				
        $fileLocation =  $this->tenant->projects->find($id)->folders->find($folder_id)->uploads->find($file_id); 
        
        $filename =  substr(explode('drawings', str_replace('+', ' ', $fileLocation->location))[1], 1, -4);
        
       
        $stream = Storage::get('drawings/' . $filename . '.pdf');
        $total = (int)preg_match_all("/\/Page\W/", $stream, $dummy)-1;  
				if($total==0){ $total=10; }
				
				Storage::makeDirectory('/split/file-' . $filename);
				
				$this->lambda_loop($total, $filename, $folder_id, $id, $file_id);
				  
     
    }
  	    
  	    
  	    /*
		
    public function processFile_inner($id, $folder_id, $file_id) {
   			 
  			$this->tenant->projects->find($id)->folders->find($folder_id)->uploads->find($file_id)->update(['processed'=>2]);

    		set_time_limit(1000);
 				$i=0;
 				
        $fileLocation =  $this->tenant->projects->find($id)->folders->find($folder_id)->uploads->find($file_id); 
        $stream = Storage::get('drawings' . explode('drawings', str_replace('+', ' ', $fileLocation->location))[1]);
        $total = (int)preg_match_all("/\/Page\W/", $stream, $dummy)-1;  
								
	      if($total==0){ $total=10; }
 
        $im = new imagick();
       
        $im->readImageBlob($stream);
       
       
        while ($i<=$total) {
      
          $img_name=date('Ymdhis');
        	$im->setIteratorIndex($i);
  				
  			 
        	$im->setImageBackgroundColor("white");
        	$im->setImageFormat('jpg');
        	$im->setImageAlphaChannel(11);
        	
        	
        	$im->resizeImage(3500, 3300, Imagick::FILTER_LANCZOS, 1);
        	$im->writeImage('drawings/org_'.  $img_name  .$i.'.jpg');
        		
        	$im->cropImage(500, 500, 3000 ,2800 );
        	$im->writeImage('drawings/thumb_' . $img_name .$i.'.png');
        	
        	
        	$tesserac=env('TESSERACT') . " '".public_path()."/drawings/thumb_" . $img_name .$i.".png' stdout";
 
 					$string =  trim(`{$tesserac}`);
 	 
        	$parser=explode("\n", $string);
        	
        	
        		$j=0;
        	foreach ($parser as $key => $value) {
        		if($value=='' || $value==' '){
        			unset($parser[$key]);
        		}
        		
        	}
        	
       	
       	
        $val2=array_slice($parser, -2, 1);
         
        $val1=array_slice($parser, -1, 1);
      
       
       
        
        
        $this->tenant->projects->find($id)->folders->find($folder_id)->drawings()->save(new Drawings([
        																																															'drw_upload_id'=>$file_id,
        																																															'drawing_name'=>$val1[0], 
        																																															'description'=> $val2[0],
        																																															'image_thumb'=> "thumb_" . $img_name .$i,
        																																															'image_org'=> "org_" . $img_name .$i]));
        
         $i++;	
        }
        
        
       $this->tenant->projects->find($id)->folders->find($folder_id)->uploads->find($file_id)->update(['processed'=>1]);
     
    }

*/
    
}
