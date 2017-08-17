<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TruckingEquipment;
use App\Truckings;

class TruckingController extends Controller
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
        $this->data['site_area']='Projects';
     
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['categories'] = $this->user->categories()->get();
        
        return view('equipment.project.newtrucking', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        // $this->validate($request, [ 
        //                             'requested_time' => 'required',
        //                             'delivery_date' => 'required',
        //                             'shipped_from' => 'required',
        //                             'shipped_to' => 'required'
        //                         ]);

        $trucking = $this->user->projects->find($id)->truckings()->save(new Truckings($request->all()));

        foreach ($request->equipment as $key => $e) {
            $truckingData = new TruckingEquipment();
            $truckingData->equipment_id = $e['equipment_id'];
            $truckingData->truck_id = $trucking->id;
            $truckingData->quantity = $e['quantity'];
            $truckingData->total_weight = $e['total_weight'];
            $truckingData->save();
        }

        return redirect('project/'.$id.'/equipment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $truckingId)
    {
        // dd($id, $truckingId);
        $this->data['truck'] = $this->user->projects->find($id)->truckings()->with('equipment', 'equipment.regionEquipment')->find($truckingId);

        return view('equipment.project.approvetruck', $this->data);
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
