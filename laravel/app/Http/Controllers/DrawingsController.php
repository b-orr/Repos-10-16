<?php

namespace App\Http\Controllers;

use App\User;
use Storage;
use App\Drawings;
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

class DrawingsController extends Controller
{

        public $folders;
        public $drawings;
        public $data;
        public $user;
        public $tenant;



	public function __construct()
	{
	    $this->middleware('auth');
	    $this->middleware('role:super,tenant');
	    
	    $this->middleware(function ($request, $next) {
	            $this->data['tenant'] = $this->tenant= User::findTenant(Auth::user());
	            $this->data['user'] = $this->user= Auth::user();
	            $this->data['projects'] = $this->tenant->projects->where('status', 'Award');
	            return $next($request);
	    });
	
	    
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

    
    public function show($location)
    {
        $this->data['site_area'] = 'Drawings';
        return view('project/1/folders/17/drawings/' . $location , $this->data);
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
        	
        	
        	$tesserac="/usr/local/bin/tesseract '/Applications/MAMP/htdocs/pronovos/laravel/public/drawings/thumb_" . $img_name .$i.".png' stdout";
 
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


    
}
