<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->data['site_area']='Projects';
     }

 	public function create()
    {
        return view('equipment.project.newtrucking', $this->data);
    }
}
