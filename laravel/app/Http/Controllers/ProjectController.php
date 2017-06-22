<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
		public $data;
		
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->data['site_area']='Projects';
     
    }
    
    public function index()
    {
        return view('project/list', $this->data);
    }
}
