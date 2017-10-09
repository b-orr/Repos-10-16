<?php

namespace App\Http\Controllers;

use App\User;
use App\Persons;
use App\Companies;
use App\CompanyLocations;
use App\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ContactsController extends Controller
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
    
    
    public function index()
    {
        $this->data['persons'] = $this->tenant->persons;
        $this->data['companies'] = $this->tenant->companies;
        $this->data['states'] = States::get();

        return view('contacts/list', $this->data);
    }

    public function update(Request $request)
    {
        $this->tenant->companies->find($request->company_id)->update($request->all());
        foreach ($request->locations as $key => $l) {
            $this->tenant->companies->find($request->company_id)->locations->find($l['id'])->update($l);
        }
        if(isset($request->newlocations)){
            foreach ($request->newlocations as $key => $nl) {
                $locationData = new CompanyLocations();
                $locationData->company_id = $request->company_id;
                $locationData->location_name = $nl['location_name'];
                $locationData->phone = $nl['phone'];
                $locationData->address = $nl['address'];
                $locationData->city = $nl['city'];
                $locationData->state = $nl['state'];
                $locationData->zip = $nl['zip'];
                $locationData->save();
            }
        }
        
        return redirect('/contacts');
    }
    public function getCompanyAjax()
    {
        $id = $_GET['companyID'];
        $this->data['states'] = States::get();
        $this->data['companyInfo'] = $this->tenant->companies->find($id);
        $this->data['locationsInfo'] = $this->tenant->companies->find($id)->locations;
        
        return response()->json($this->data); 
    }
    public function getLocationAjax() {
        
        $Company_data = $_GET['companyID'];

        if($Company_data != '') {


        $CompanyID = array();
        
        foreach($Company_data as $key => $compID) {
            list($ID,$Name) = explode('|', $compID);
            array_push($CompanyID, $ID);
        }
        
        
        $this->data['locations'] = array();

        if($CompanyID != '') {


            foreach($CompanyID as $key => $val) {
                
                $locations= $this->tenant->companies->find($val)->locations;
                
                    foreach($locations as $key => $value1) {
                       array_push($this->data['locations'], $value1);
                    }
                
            }
        
        } else {

            $this->data['locations'] = [];
        } 
 
        } else {

            $this->data['locations'] = [];
            
        } 
        return response()->json($this->data);
   
    }

    public function getLocationAjaxEdit($id) {
        
        $Company_data = $_GET['companyID'];

        $this->data['companies'] = $this->tenant->companies;

        if($Company_data != '') {


        $CompanyID = array();
        
        foreach($Company_data as $key => $compID) {
           // list($ID,$Name) = explode('|', $compID);
            array_push($CompanyID, $compID);
        }
        
        
        $this->data['locations'] = array();

        if($CompanyID != '') {


            foreach($CompanyID as $key => $val) {
                
                $locations= $this->tenant->companies->find($val)->locations;
                
                    foreach($locations as $key => $value1) {
                       array_push($this->data['locations'], $value1);
                    }
                
            }
        
        } else {

            $this->data['locations'] = [];
        } 
 
        } else {

            $this->data['locations'] = [];
            
        } 
        return response()->json($this->data);
   
    }
    
}