<?php

namespace App\Http\Controllers;

use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
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
		    
		    $this->data['site_area']='Projects';
		 
		}
		
     
    public function index($id)
    {
         //dd($this->user->projects->find($id)->folders);

        $this->data['folders'] = $this->user->projects->find($id)->folders;

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
