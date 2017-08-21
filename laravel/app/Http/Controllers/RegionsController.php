<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegionsController extends Controller
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
                    return $next($request);
            });
        $this->data['site_area']='Projects';
     
    }
    
    
    public function set_region($id, Request $request) {

			
    	$request->session()->put('region', $this->tenant->regions->find($id)->name);
    	$request->session()->put('region_id', $this->tenant->regions->find($id)->id);
    	
    	return redirect()->back();
    }
}
