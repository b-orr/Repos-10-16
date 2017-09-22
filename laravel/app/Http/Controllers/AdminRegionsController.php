<?php

namespace App\Http\Controllers;

use App\User;
use App\Regions;
use App\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegionsController extends Controller
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
        
        $this->data['site_area']='Admin';
     
    }
    
    
    public function index()
    {
        $this->data['states'] = States::get();
        $this->data['lists'] = $this->tenant->regions;
        return view('admin/region/list', $this->data);
    }
 
   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        $this->tenant->regions()->save(new Regions($request->all()));
        
        return redirect('/admin/regions');
    }

    
    public function edit($regions)
    {
        
        $this->data['states'] = States::get();
        $this->data['region']=$this->tenant->regions()->find($regions);
        
         if(!empty($this->data['region'])){
         	return view('admin/region/edit', $this->data);
         }else {
         	return redirect('/admin/regions');
         }
    }

    
    public function update(Request $request, $regions)
    {
        $this->tenant->regions()->find($regions)->update($request->all());
        
        return redirect('/admin/regions');
    }

     
    public function destroy($regions)
    {
        $this->tenant->regions()->find($regions)->delete();
        
        return redirect('/admin/regions');
    }
}
