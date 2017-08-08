<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxCallsController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        $this->middleware(function ($request, $next) {
                    $this->user= Auth::user();
                    return $next($request);
            });
     
    }

    public function transferSubCategories()
    {
        $catID = $_GET['category'];
        $subID = $_GET['subcategory'];
        if($subID != 0){
        	$this->data['categories'] = $this->user->categories()->where('id', $catID)->with('subcategories', 'subcategories.equipment')->get();
        }
        else {
        	$this->data['categories'] = $this->user->categories()->where('id', $catID)->with('subcategories')->get();
        }
        return response()->json($this->data);
    }
}
