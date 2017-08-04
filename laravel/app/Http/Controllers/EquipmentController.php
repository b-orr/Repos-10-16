<?php

namespace App\Http\Controllers;

use App\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentController extends Controller
{

  public $data;
        
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        $this->middleware(function ($request, $next) {
                    $this->user= Auth::user();
                    return $next($request);
            });
        
        $this->data['site_area']='Projects';
    }
    public function index()
    {
      return view('equipment.eqoverview');
    }

    public function forecasting()
    {
      dd('asdasd');
      $this->data['project'] = $this->user->projects->find($id)->select('id')->first();
      return view('equipment.forecasting', $this->data);
    }

    public function rental()
    {
      return view('equipment.rental');
    }
    public function allocation()
    {
      return view('equipment.allocation');
    }
    public function inventory()
    {
      return view('equipment.inventory');
    }

    //project equipment functions

    public function approvetruck()
    {
      return view('equipment.project.approvetruck');
    }
}
