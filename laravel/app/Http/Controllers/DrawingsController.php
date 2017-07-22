<?php

namespace App\Http\Controllers;

use App\Drawings;
use App\Folders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
     
    }
		
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$folder_id)
    {
        $this->data['site_area'] = 'Drawings';

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
        //
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

    
}
