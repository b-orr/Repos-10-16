<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;

class ProjectController extends Controller
{
    public $data;
    public $user;
        
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        $this->middleware(function ($request, $next) {
                    $this->user= Auth::user();
                    $this->data['projects'] = $this->user->projects;
                    return $next($request);
            });
        
        $this->data['site_area']='Projects';
        
   
    }
 
    public function index()
    {
        
        return view('project/list', $this->data);
    }

    
    public function create()
    {
    	
    	 $this->data['architects'] = $this->user->companies->where('type', 'Architect');
    	 $this->data['struct_eng'] = $this->user->companies->where('type', 'Structural/Engineer');
    	 $this->data['owners'] = $this->user->persons;
    	 $this->data['op_manager'] = User::where('parent_user_id', $this->user->id)->where('role', 'OP Manager')->get();
    	 $this->data['estimators'] = User::where('parent_user_id', $this->user->id)->where('role', 'Estimator')->get();
    	 
       return view('project.create', $this->data);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required',
        														 'bid_date' => 'required',
        														 'bid_time' => 'required',
        														 'start_date' => 'required',
        														 'duration_start' => 'required',
        														 'bid_username' => 'required']);
         
        $request->request->add(['submited_user_id' => $this->user->id]); 
        $this->user->projects()->save(new Projects($request->all()));
        
        return redirect('/project');
    }

    
    public function show($id)
    {
        $this->data['project'] = $this->user->projects->find($id);
        
     
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
