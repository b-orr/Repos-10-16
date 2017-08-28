<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Fields;
use App\FieldsValues;
use App\Folders;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class FolderController extends Controller
{
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
		    
		    $this->data['site_area']='Projects';
		 
		}
		
     
    public function index($id)
    {
        $this->data['folders'] = $this->tenant->projects->find($id)->folders;
        $this->data['project_id'] = $this->tenant->projects->find($id);
   
        
        return view('drawings/layout', $this->data);
    }
   
    public function store($id, Request $request)
    {

        $this->validate($request, [
            'pj_project_id' => 'required',
            'last_change_user_id' => 'required',
            'folder_name' => 'required',
            'folder_description' => 'required',
            ]);

        

        $this->tenant->projects->find($id)->folders()->save(new Folders($request->all()));
        
        return redirect('/project/'. $id .'/folders');
    }

    
    public function edit($id, $folder)
    {
        $this->data['project_id'] = $this->tenant->projects->find($id);
        $this->data['folders'] = $this->tenant->projects->find($id)->folders->find($folder);

        return view('drawings/folderEdit', $this->data);
    }

     
    public function update($id, $folder, Request $request)
    {
        $this->validate($request, [
            'pj_project_id' => 'required',
            'last_change_user_id' => 'required',
            'folder_name' => 'required',
            'folder_description' => 'required',
            ]);
 
        $this->tenant->projects->find($id)->folders->find($folder)->update($request->all());
        
        return redirect('/project/1/folders');
    }

     
    public function destroy($id, $folder)
    {
 
        $this->tenant->projects->find($id)->folders->find($folder)->delete();

        return redirect('/project/1/folders');
    }

    
}
