<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;
use App\Persons;
use App\AddedClients;

class AddedClientController extends Controller
{


    
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
       $client_array = array();
       $clients =$this->tenant->projects->find($id)->client_list()->get();
      
       foreach ($clients as $key => $value) {
            array_push($client_array, $value->client_id);
        } 
       
       $this->validate($request, ['client_id' => 'required']);
        
       $request->request->add(['pj_project_id' => $id]);
       
       if(!in_array($request->client_id, $client_array)) {
            $this->tenant->projects->find($id)->client_list()->save(new AddedClients($request->all()));
       } 
    
        return redirect('estimate/' . $id .'/edit#client');

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
    public function destroy($id, $client_id)
    {
        AddedClients::destroy($client_id);

        return redirect('estimate/' . $id .'/edit#person');
    }
}
