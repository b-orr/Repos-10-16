<?php

namespace App\Http\Controllers;

use App\User;
use App\States;
use App\Companies;
use App\CompanyLocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
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
        
        $this->data['site_area']='Contacts';
     
    }
    
    
 
   
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [ 'name' => 'required']);
        

        $company =$this->tenant->companies()->save(new Companies($request->all()));
        if (isset($request->newlocations)) {
            foreach ($request->newlocations as $key => $l) {
                $locationData = new CompanyLocations();
                $locationData->company_id = $company->id;
                $locationData->location_name = $l['location_name'];
                $locationData->phone = $l['phone'];
                $locationData->address = $l['address'];
                $locationData->city = $l['city'];
                $locationData->state = $l['state'];
                $locationData->zip = $l['zip'];
                $locationData->areas = implode(", ", $l['areas']);
                $locationData->save();
            }
        }
        return redirect('/contacts');
    }

    
    public function edit($companies)
    {

        $this->data['company']=$this->tenant->companies()->find($companies);

        $this->data['locations'] = $this->data['company']->locations;
        $this->data['states'] = States::get();

        //dd($this->data['states']);
        
         if(!empty($this->data['company'])){
         	return view('contacts/companies/edit', $this->data);
         }else {
         	return redirect('/contacts');
         }
    }

    
    public function update(Request $request, $companies)
    {

       //dd($request->locations);

        $this->tenant->companies->find($companies)->update($request->all());
        foreach ($request->locations as $key => $l) {
            $this->tenant->companies->find($companies)->locations->find($l['id'])->update($l);
        }
        
        if(isset($request->newlocations)){
            foreach ($request->newlocations as $key => $nl) {
                $locationData = new CompanyLocations();
                $locationData->company_id = $companies;
                $locationData->location_name = $nl['location_name'];
                $locationData->phone = $nl['phone'];
                $locationData->address = $nl['address'];
                $locationData->city = $nl['city'];
                $locationData->state = $nl['state'];
                $locationData->zip = $nl['zip'];
                $locationData->save();
            }
        }
        
        //$this->tenant->companies()->find($companies)->update($request->all());
        
        return redirect('/contacts');
    }

     
    public function destroy($companies)
    {
        $this->tenant->companies()->find($companies)->delete();
        
        return redirect('/contacts');
    }
}