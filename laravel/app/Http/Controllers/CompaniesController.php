<?php

namespace App\Http\Controllers;

 
use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
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
        
        $this->data['site_area']='Contacts';
     
    }
    
    
 
   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        $this->user->companies()->save(new Companies($request->all()));
        
        return redirect('/contacts');
    }

    
    public function edit($companies)
    {
        $this->data['company']=$this->user->companies()->find($companies);
        
         if(!empty($this->data['company'])){
         	return view('contacts/companies/edit', $this->data);
         }else {
         	return redirect('/contacts');
         }
    }

    
    public function update(Request $request, $companies)
    {
        $this->user->companies()->find($companies)->update($request->all());
        
        return redirect('/contacts');
    }

     
    public function destroy($companies)
    {
        $this->user->companies()->find($companies)->delete();
        
        return redirect('/contacts');
    }
}