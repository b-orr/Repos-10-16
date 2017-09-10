<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;
use App\Notes;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
               
       $this->validate($request, [ 'note' => 'required' ]);
        
       $request->request->add(['pj_project_id' => $id]);
       $request->request->add(['user_id' => $this->user->id]);

       
       $this->tenant->projects->find($id)->notes()->save(new Notes($request->all()));
       
       return redirect('/estimate/' . $id . '/edit#note');
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
    public function edit($id, $note_id, Request $request)
    {
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $note_id)
    {
        
       
       $this->validate($request, [ 'note' => 'required' ]);
        
       $request->request->add(['user_id' => $this->user->id]);  

       $this->tenant->projects->find($id)->notes()->find($note_id)->update($request->all());

       return redirect('estimate/' . $id .'/edit#note');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $note_id)
    {
        Notes::destroy($note_id);

        return redirect('estimate/' . $id .'/edit#note');
    }
}
