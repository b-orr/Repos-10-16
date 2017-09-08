<?php

namespace App\Http\Controllers;
use App\PhotosFolders;
use App\Photos;
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
    public function index()
    {
        
        $this->data['folders'] = PhotosFolders::with('subfolders','subfolders')->get();
        
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
                
        // $file = $request->input('file');
        // $tmpfile = (string) $file;

        //Set Filename 
        // $filename = "Nature.jpg";

        // //Set Directory
        // $directory = "photos";
        // //Put on S3 Bucket:
        // //Storage::disk('s3')->put($directory.'/'.$filename , $file);
          

    $p = 'test name';
    
        $img = new Photos([
            'photo_name' => $p, //ova e za test za da pomine na query ne funkcionira bidejki zema NULL
            // 'photo_name' => $request->input('photo')->getClientOriginalName(), 
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
