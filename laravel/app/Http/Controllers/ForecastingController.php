<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Requirements;
use App\RequirementEquipment;

class ForecastingController extends Controller
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
                    $this->data['user'] = $this->user = Auth::user();
                    $this->data['projects'] = $this->tenant->projects;
                    return $next($request);
            });
        $this->data['site_area']='Projects';

     
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $this->data['project'] = Auth::user()->projects()->find($id)->select('id', 'name')->first();
        return view('equipment.project.forecasting', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['categories'] = $this->tenant->categories()->get();
        return view('equipment.project.newrequirement', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        // dd($request);
        $requirement = $this->tenant->projects()->find($id)->requirements()->save(new Requirements($request->all()));

        foreach ($request->equipment as $key => $e) {
            $requirementData = new RequirementEquipment();
            $requirementData->equipment_id = $e['equipment_id'];
            $requirementData->requirement_id = $requirement->id;
            $requirementData->quantity = $e['quantity'];
            $requirementData->save();
        }

        return redirect('project/'.$id.'/forecasting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
