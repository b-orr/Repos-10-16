<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transfers;
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

        dd($request);
        $this->validate($request, [ 'status' => 'required',
                                    'pickup_date' => 'required',
                                    'delivery_date' => 'required',
                                    'shipped_from' => 'required',
                                    'shipped_to' => 'required',
                                    'loaded_by' => 'required',
                                    'delivery_contact' => 'required',
                                    'delivery_number' => 'required',
                                    'freight_line' => 'required',
                                    'total_weight' => 'required',
                                    'load_scheduled' => 'required',
                                    'load_actual' => 'required',
                                    'load_departure' => 'required',
                                    'created_by' => 'required'
                                ]);

        $request->pickup_date = Carbon::createFromFormat('m/d/Y', $request->pickup_date)->startOfDay();
        $request->delivery_date = Carbon::createFromFormat('m/d/Y', $request->delivery_date)->startOfDay();
        
        $this->user->projects->find($id)->transfers()->save(new Transfers($request->all()));
        return redirect('project/'.$id.'/equipment');
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
