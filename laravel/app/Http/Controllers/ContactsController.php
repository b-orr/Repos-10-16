<?php

namespace App\Http\Controllers;

use App\User;
use App\Persons;
use App\Companies;
use App\CompanyLocations;
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
        
        //dd($this->data['locations']);
        return view('contacts/list', $this->data);
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
    
}