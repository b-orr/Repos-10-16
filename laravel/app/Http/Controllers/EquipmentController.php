<?php

namespace App\Http\Controllers;

use App\User;
use App\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentController extends Controller
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
        
        $this->data['site_area']='Projects';
    }
    public function index()
    {
      return view('equipment.eqoverview', $this->data);
    }

    public function forecasting()
    {
      // $this->data['project'] = $this->user->projects->find($id)->select('id')->first();
      return view('equipment.forecasting', $this->data);
    }

    public function rental()
    {
      return view('equipment.rental', $this->data);
    }
    public function allocation()
    {
      return view('equipment.allocation', $this->data);
    }
    public function inventory()
    {
      return view('equipment.inventory', $this->data);
    }

    //project equipment functions

    public function approvetruck()
    {
      return view('equipment.project.approvetruck', $this->data);
    }
}
