<?php

namespace App\Http\Controllers;

use App\PhotosFolders;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\PhotosSubFolders;
use Illuminate\Http\Request;

class PhotosSubFolderController extends Controller
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
    public function index()
    {
        $this->data['folders'] = PhotosFolders::with('subfolders')->get();
        $this->data['folders'] = PhotosSubFolders::all();
        // dd($this->data['folders']);
        return view('project.photos.photos', $this->data);
    }
    public function findSubfolder($project_id){
        $id = $_GET['id'];
        //dd($id);
        $this->data['subcategories'] = $this->tenant->projects()->find($project_id)->photosFolders()->where('id', $id)->with('subfolders')->get();
        

        
        return response()->json($this->data);//then sent this data to ajax success
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
    public function store($id,Request $request)
    {
     $this->validate($request, [ 'name' => 'required']);
   // dd($request->all());

      $subfolders = new PhotosSubFolders();
      PhotosSubFolders::create($request->all());

      return redirect('project/'.$id.'/photos');
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
