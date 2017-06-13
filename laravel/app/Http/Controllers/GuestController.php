<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Industry;
use App\Category;

class GuestController extends Controller
{
    
    public function __construct()
    {
   
    }

  
    public function index()
    {
    
    		if (Auth::check()) {
    		    return redirect('home');
    		}else {
    			  return redirect('login');
    		}
        
    }
}
