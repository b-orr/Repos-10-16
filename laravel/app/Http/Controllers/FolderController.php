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
        
        
        foreach ($this->data['folders'] as $key => $value) {
            $this->data['process_drawings'][$value->id] = DB::table('drw_uploads')->where('folder_id',$value->id)->count();
            $this->data['user_name'][$value->id] = DB::table('drw_folders')->join('users', 'users.id', '=', 'drw_folders.last_change_user_id')->where('drw_folders.id',$value->id)->select('name')->first();
        }
            
        
        
        return view('drawings/layout', $this->data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function show(Drawings $drawings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $folder)
    {
        //dd('edit page');

        $this->data['project_id'] = $this->tenant->projects->find($id);

        $this->data['folders'] = $this->tenant->projects->find($id)->folders->find($folder);

        //dd($this->data['folders']);

        return view('drawings/folderEdit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $folder)
    {
        
        

        $this->tenant->projects->find($id)->folders->find($folder)->delete();

        return redirect('/project/1/folders');
    }

    
}
