<?php

namespace App\Http\Controllers;

use App\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegionsController extends Controller
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
        
        $this->data['site_area']='Admin';
     
    }
    
    
    public function index()
    {
        $this->data['lists'] = $this->user->regions;
        return view('admin/region/list', $this->data);
    }
 
   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        $this->user->regions()->save(new Regions($request->all()));
        
        return redirect('/admin/regions');
    }

    
    public function edit($regions)
    {
        $this->data['region']=$this->user->regions()->find($regions);
        
         if(!empty($this->data['region'])){
         	return view('admin/region/edit', $this->data);
         }else {
         	return redirect('/admin/regions');
         }
    }

    
    public function update(Request $request, $regions)
    {
        $this->user->regions()->find($regions)->update($request->all());
        
        return redirect('/admin/regions');
    }

     
    public function destroy($regions)
    {
        $this->user->regions()->find($regions)->delete();
        
        return redirect('/admin/regions');
    }
}
