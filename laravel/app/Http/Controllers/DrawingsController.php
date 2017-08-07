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
        
        
        $this->data['upload'] = new Signature(
            "AKIAIXALNCV24MHDDXXQ",
            "CT3rGoSc/vY3hK33b0T5gBIsWtPv9AupvQc3ceF1",
            "pronovosrubixcube",
            "us-east-1"
        );

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

    

    public function uploadFile(Request $request) {
            
        $sourceFile = $request->file('file');
      
        $originalName = $sourceFile->getClientOriginalName();

        $userName = $this->user->name;

        $now = Carbon::now();

        $targetFile = $userName . '_' . $now . '_' . $originalName;

        // Configure the config/filesystems.php (or .env) for the s3 drive ... bucket: pronovosrubixcube, folder: drawings

        $disk = Storage::disk('s3');

        $filePath = '/drawings/';
        
        $disk->put($filePath.$targetFile , fopen($sourceFile, 'r+'));

    }

    public function saveToDB($project_id, $folder_id, Request $request) {
            
        //dd($request->s3file[0]);

        $location = str_replace("%2F", "/", $request->s3file[0]['location']);
        
        $name = substr($request->s3file[0]['key'], 9);

        $drawing_name = substr($name, 0, -4);

        $description = $request->s3file[0]['releaseDesc'];
        
        $drawing_date = $request->s3file[0]['releaseDate'];

        

        
        }
    
}
