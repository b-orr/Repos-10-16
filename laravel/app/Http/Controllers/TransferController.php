<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transfers;
use App\Truckings;
use App\TransferEquipment;
use Carbon\Carbon;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function index($id)
    {
        $this->data['transfers'] = $this->user->projects->find($id)->transfers()->get();
        $this->data['truckings'] = $this->user->projects->find($id)->truckings()->get();
        // dd($this->data['truckings']);
        return view('equipment.project.overview', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->data['project'] = $this->user->projects->find($id)->select('id', 'name')->first();
        $this->data['categories'] = $this->user->categories()->get();
        return view('equipment.project.newtransfer', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $transfer = $this->user->projects->find($id)->transfers()->save(new Transfers($request->all()));

        foreach ($request->equipment as $key => $e) {
            $transferData = new TransferEquipment();
            $transferData->equipment_id = $e['equipment_id'];
            $transferData->transfer_id = $transfer->id;
            $transferData->quantity = $e['quantity'];
            $transferData->total_weight = $e['total_weight'];
            $transferData->tracking_number = $e['tracking_number'];
            $transferData->save();
        }
        
        return redirect('project/'.$id.'/equipment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $transferId)
    {
        //
        $this->data['transfer'] = $this->user->projects->find($id)->transfers()->with('equipment', 'equipment.regionEquipment')->find($transferId);
        // dd($this->data['transfer']);
        $this->data['project'] = $this->user->projects->find($id)->select('id', 'name')->first();
        $this->data['categories'] = $this->user->categories()->get();

        return view('equipment.project.approvetransfer', $this->data);
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
    public function update(Request $request, $id, $transferId)
    {
        $this->user->projects->find($id)->transfers()->find($transferId)->update($request->all());

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
