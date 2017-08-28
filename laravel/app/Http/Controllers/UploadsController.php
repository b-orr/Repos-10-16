<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Fields;
use App\Uploads;
use App\FieldsValues;
use App\Folders;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class UploadsController extends Controller
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
  
      }
      
      
 
    public function saveToDB($project_id, $folder_id, Request $request) 
    {
       $data['location'] = str_replace("%2F", "/", $request->s3file[0]['location']); 
       $name = substr($request->s3file[0]['key'], 9);
			 $data['filename'] = substr($name, 0, -4);
			 $data['release_desc'] = $request->s3file[0]['releaseDesc'];
			 $data['release_date'] = $request->s3file[0]['releaseDate'];
          
       $this->tenant->projects->find($project_id)->folders->find($folder_id)->uploads()->save(new Uploads($data));
       $this->tenant->projects->find($project_id)->folders->find($folder_id)->update(['last_change_user_id' =>$this->tenant->id]);
		
       return redirect('project/' . $project_id . '/folders/' . $folder_id . '/drawings');
    }
}
