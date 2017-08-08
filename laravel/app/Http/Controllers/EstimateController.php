<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;


class EstimateController extends Controller
{
   public $data;
    public $user;
        
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        $this->middleware(function ($request, $next) {
                    $this->user= Auth::user();
                    $this->data['projects'] = $this->user->projects->where('status', '<>', 'Award')->where('status', '<>', 'Archive');
                    return $next($request);
            });
        
        $this->data['site_area']='Estimating';
        
   
    }
   
   
   public function index()
   {
       
       return view('estimate.list', $this->data);
   }

   
   public function create()
   {
   	
   	 $this->get_Crew();
   	 
      return view('estimate.create', $this->data);
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
       
       return redirect('/estimate');
   }

   
   public function show($id)
   {
   			 
       $this->data['project'] = $this->user->projects->find($id);
       
    
     	if($this->data['project']->status=='Award'){
     	
     		return  redirect('/project/'. $id);
     	}
       return view('estimate.overview', $this->data);
   }

   
   public function edit($id)
   {
   
 
			 $this->get_Crew();
		
       $this->data['project'] = $this->user->projects->find($id);
         
       return view('estimate.edit', $this->data);
   }

  
   public function update(Request $request, $id)
   {
       $this->user->projects()->find($id)->update($request->all());
       
       return redirect('/estimate/' . $id);
   }
   
   
   public function get_Crew() {
   		$this->data['architects'] = $this->user->companies->where('type', 'Architect');
		  $this->data['struct_eng'] = $this->user->companies->where('type', 'Structural/Engineer');
		  $this->data['owners'] = $this->user->persons;
		  $this->data['op_manager'] = User::where('parent_user_id', $this->user->id)->where('role', 'OP Manager')->get();
		  $this->data['estimators'] = User::where('parent_user_id', $this->user->id)->where('role', 'Estimator')->get();
   }
}
