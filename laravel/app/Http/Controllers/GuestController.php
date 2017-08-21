<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Industry;
use Response;
use App\Category;

class GuestController extends Controller
{
    
    public function __construct()
    {
   
    }

  
    public function index()
    {
    
    		if (Auth::check()) {
    				switch (Auth::user()->role) {
    						case "super":
						        return redirect('super');
						        break;
//						    case "tenant":
//						        return redirect('home');
//						        break;
						    default:
						    	return redirect('home');
						    	break;
    				}
    		}else {
    			  return redirect('login');
    		}
        
    }
    
    public function forbidden() {
    	 echo 'This page is forbidden';
    	 
    }
}
