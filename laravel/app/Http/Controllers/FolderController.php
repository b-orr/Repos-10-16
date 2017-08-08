<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Fields;
use App\FieldsValues;
use App\Folders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    	public $data;
    	public $user;
        public $folder;
    			
		public function __construct()
		{
		    $this->middleware('auth');
		    $this->middleware('role:super,tenant');
		    
		    $this->middleware(function ($request, $next) {
		            $this->user= Auth::user();
		            $this->data['projects'] = $this->user->projects;
		            return $next($request);
		    });
		    
		    $this->data['site_area']='Projects';
		 
		}
		
     
    public function index($id)
    {
         //dd($this->user->projects->find($id)->folders);

        $this->data['folders'] = $this->user->projects->find($id)->folders;

        $this->data['project_id'] = $this->user->projects->find($id);

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

        

        $this->user->projects->find($id)->folders()->save(new Folders($request->all()));
        
        return redirect('/project/1/folders');
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

        $this->data['project_id'] = $this->user->projects->find($id);

        $this->data['folders'] = $this->user->projects->find($id)->folders->find($folder);

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

        

        $this->user->projects->find($id)->folders->find($folder)->update($request->all());
        
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
        
        

        $this->user->projects->find($id)->folders->find($folder)->delete();

        return redirect('/project/1/folders');
    }

    
}
