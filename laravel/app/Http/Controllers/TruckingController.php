<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TruckingEquipment;
use App\Truckings;
use App\Inventory;

class TruckingController extends Controller
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
        $this->data['categories'] = $this->tenant->categories()->get();
        
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

        $trucking = $this->tenant->projects->find($id)->truckings()->save(new Truckings($request->all()));

        if(isset($request->equipment)){
            foreach ($request->equipment as $key => $e) {
            $truckingData = new TruckingEquipment();
            $truckingData->equipment_id = $e['equipment_id'];
            $truckingData->truck_id = $trucking->id;
            $truckingData->project_id = $id;
            $truckingData->name = $e['name'];
            $truckingData->weight = $e['weight'];
            $truckingData->quantity = $e['quantity'];
            $truckingData->total_weight = $e['total_weight'];
            $truckingData->save();
            }
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
        $this->data['truck'] = $this->tenant->projects->find($id)->truckings()->with('equipment', 'equipment.regionEquipment')->find($truckingId);
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
    public function update(Request $request, $id, $truckingId)
    {
        if($request->approved == 0){
            $this->tenant->projects->find($id)->truckings()->find($truckingId)->update($request->all());
        }
        elseif ($request->approved == 1) {

            $truck = Truckings::find($truckingId);
            $truck->approved = 1;
            $truck->save();

            $truck = $this->tenant->projects->find($id)->truckings()->with('equipment', 'equipment.regionEquipment')->find($truckingId);
            foreach ($truck->equipment as $key => $e) {
                if($e->equipment_id != 0){
                    $invData = new Inventory();
                    $invData->equipment_id = $e['equipment_id'];
                    $invData->name = $e['name'];
                    $invData->quantity = $e['quantity'];
                    $invData->weight = $e['weight'];
                    $invData->project_id = $id;
                    $invData->reason = "Need";
                    $invData->owner = 1;
                    $invData->manager = 1;
                    $invData->purchased_from = 0;
                    $invData->purchase_price = 0;
                    $invData->company_id_number = 0;
                    $invData->sub_category_id = $e->regionEquipment->sub_category_id;
                    $invData->save();
                }
                else {
                    $invData = new Inventory();
                    $invData->equipment_id = 0;
                    $invData->name = $e['name'];
                    $invData->quantity = $e['quantity'];
                    $invData->weight = $e['weight'];
                    $invData->project_id = $id;
                    $invData->reason = "Need";
                    $invData->owner = 1;
                    $invData->manager = 1;
                    $invData->purchased_from = 0;
                    $invData->purchase_price = 0;
                    $invData->company_id_number = 0;
                    $invData->sub_category_id = 0;
                    $invData->save();
                }
                
            }

        }
        elseif ($request->approved == 2) {
            $truck = Truckings::find($truckingId);
            $truck->approved = 2;
            $truck->save();
        }

        return redirect('project/'.$id.'/equipment');
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
