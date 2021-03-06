<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectEquipmentController extends Controller
{ 

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
	                $this->data['projects'] = $this->tenant->projects;
	                return $next($request);
	        });
	    $this->data['site_area']='Projects';
	
	 
	}
	
	public function overview()
	{
	    return view('equipment.project.overview', $this->data);
	}
	
	public function forecasting($id)
	{
	    $this->data['project'] = Auth::user()->projects()->find($id)->select('id')->first();
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
