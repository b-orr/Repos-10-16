<?php

namespace App\Http\Controllers;

use App\User;
use App\Persons;
use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        return view('contacts/list', $this->data);
    }
 
   
    
}