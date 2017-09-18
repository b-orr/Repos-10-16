<?php

namespace App\Http\Controllers;
use App\PhotosFolders;
use App\Photos;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;

use Intervention\Image\Image;
use Storage;
use Illuminate\Support\Facades\Input;
use App\PhotosSubFolder;
use File;


class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
                    return $next($request);
            });
     
    }
    public function index($id)
    {
        $this->data['folders'] = $this->tenant->projects()->find($id)->photosFolders()->with('subfolders')->get();
       // dd($this->data['folders']);
        
        
        //dd($this->data['subfolders']->subfolders);
        return view('project.photos.photos', $this->data);
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
                
                
		    $image = $request->file('photo');
		    
		    $imageFileName = time() . '.' . $image->getClientOriginalExtension();
		    Storage::put('photos/' . $imageFileName , file_get_contents($image), 'public');

            
        $img = new Photos([
            
            'photo_name' => $request->input('photo')->getClientOriginalName(), 
            'subfolder_id'=> $request->input('subfolder'),
        ]);
        $img->save();
        
      return redirect('project/'. $id . '/photos');
      
    
    }
  
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
