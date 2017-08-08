<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use DateTime;
use Folders;

class UploadsController extends Controller
{
    
	// da se popravi
    public function saveToDB($project_id, $folder_id, Request $request) {
            
    	//dd($request->s3file[0]);
        $location = str_replace("%2F", "/", $request->s3file[0]['location']);
        
        $name = substr($request->s3file[0]['key'], 9);

        //into DB drw_uploads
        
            $filename = substr($name, 0, -4);
            $user =  $request->s3file[0]['user'];
            $release_desc = $request->s3file[0]['releaseDesc'];
            
            $release_date = $request->s3file[0]['releaseDate'];
            $release_date = Carbon::createFromFormat('m/d/Y', $release_date);
            
            $now = Carbon::now();
        //into DB

       DB::table('drw_uploads')->insert(              
                
                [
                	'location' => $location,
                    'filename' => $filename, 
                    'release_desc' => $release_desc,
                    'release_date'=>$release_date,
                    'folder_id'=>$folder_id,
                    'created_at'=>$now
                    
                ]
            );

       DB::table('drw_folders')
        ->where('id', $folder_id)
        ->update(array(
            'last_change_user_id' => $user,
            'updated_at' =>  $now
          ));
        
        
       return redirect('project/' . $project_id . '/folders/' . $folder_id . '/drawings');
        }
}
