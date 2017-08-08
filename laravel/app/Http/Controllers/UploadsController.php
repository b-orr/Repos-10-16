<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UploadsController extends Controller
{
    
	// da se popravi
    public function saveToDB($project_id, $folder_id, Request $request) {
            
    
        $location = str_replace("%2F", "/", $request->s3file[0]['location']);
        
        $name = substr($request->s3file[0]['key'], 9);

        //into DB drw_uploads
        
            $filename = substr($name, 0, -4);

            $release_desc = $request->s3file[0]['releaseDesc'];
            
            $release_date = $request->s3file[0]['releaseDate'];

            //$folder_id = $request->s3file[0]['folder_id'];   
                 
        
        //into DB

       DB::table('drw_uploads')->insert(              
                
                [
                	'location' => $location,
                    'filename' => $filename, 
                    'release_desc' => $release_desc,
                    'release_date'=>$release_date,
                    'folder_id'=>$folder_id,
                    
                ]
            );
        
        
       return redirect('project/' . $project_id . '/folders/' . $folder_id . '/drawings');
        }
}
