<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectEquipmentController extends Controller
{ 
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->data['site_area']='Projects';
     
    }
    public function overview()
    {
    	return view('equipment.project.overview', $this->data);
    }

    public function forecasting()
    {
    	return view('equipment.project.forecasting', $this->data);
    }

    public function truckinglog()
    {
    	return view('equipment.project.truckinglog', $this->data);
    }

    public function rental()
    {
    	return view('equipment.project.rental', $this->data);
    }
}
