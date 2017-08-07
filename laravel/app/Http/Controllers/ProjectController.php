<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
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
        $this->data['projects'] = $this->user->projects;
        return view('project/list', $this->data);
    }

    
    public function create()
    {
       return view('project.create', $this->data);
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $this->data['project'] = $this->user->projects->find($id)->select('id')->first();
        return view('project.overview', $this->data);
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
