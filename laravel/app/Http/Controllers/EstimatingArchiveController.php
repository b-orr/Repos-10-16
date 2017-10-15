<?php

namespace App\Http\Controllers;

use App\User;
use App\Regions;
use App\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstimatingArchiveController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->middleware(function ($request, $next) {
                $this->data['tenant'] = $this->tenant= User::findTenant(Auth::user());
                $this->data['user'] = $this->user= Auth::user();
                $this->data['projects'] = $this->tenant->projects->where('status', '<>', 'Current')->where('status', '<>', 'Submitted')->where('sttus', '<>', 'Tracking');

                return $next($request);
        });
        
        $this->data['site_area']='Estimating';
     
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        return view('estimate\archive', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
