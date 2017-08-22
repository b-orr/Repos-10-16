<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;
use App\Bid;

class BidController extends Controller
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
			             $this->data['projects'] = $this->tenant->projects->where('status', '<>', 'Award')->where('status', '<>', 'Archive');
			             return $next($request);
			     });
			 
			 $this->data['site_area']='Estimating';
			 
		
		}

    public function index($project_id)
    {
    
    		$this->data['project'] = $this->tenant->projects->find($project_id);
        return view('estimate.bid.overview', $this->data);
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(Bid $bid)
    {
        //
    }
 
    public function edit(Bid $bid)
    {
        //
    }
 
    public function update(Request $request, Bid $bid)
    {
        //
    }
 
    public function destroy(Bid $bid)
    {
        //
    }
}
