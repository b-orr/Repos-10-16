<?php

namespace App\Http\Controllers;

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

use DB;

class DrawingsController extends Controller
{

        public $folders;
        public $drawings;
        public $data;
        public $user;

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->middleware(function ($request, $next) {
                $this->user= Auth::user();
                $this->data['projects'] = $this->user->projects->where('status', 'Award');
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
		
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$folder_id)
    {
        $this->data['site_area'] = 'Drawings';
        $this->data['project_id'] = $id;
        $this->data['folder_id'] = $folder_id;
        
        $this->data['user'] = $this->user= Auth::user();
        $this->data['upload'] = new Signature(
            "AKIAIXALNCV24MHDDXXQ",
            "CT3rGoSc/vY3hK33b0T5gBIsWtPv9AupvQc3ceF1",
            "pronovosrubixcube",
            "us-east-1"
        );

        $this->data['UploadedFiles'] = DB::table('drw_uploads')->where('folder_id',$folder_id)->get();

       
        $this->data['drawings'] = $this->user->projects->find($id)->folders->find($folder_id)->drawings;

       
                            
        return view('drawings.drawingList', $this->data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function show($location)
    {


        $this->data['site_area'] = 'Drawings';

        return view('project/1/folders/17/drawings/' . $location , $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function edit(Drawings $drawings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drawings $drawings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drawings  $drawings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drawings $drawings)
    {
        //
    }

    

    public function processFile($id,$folder_id,$file_id) {
            
        DB::table('drw_uploads')
            ->where('id', $file_id)
            ->delete();

    return redirect('project/' . $id . '/folders/' . $folder_id . '/drawings');

    }


    
}
