<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;
use App\Persons;

class EstimateController extends Controller
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
                    $this->data['projects'] = $this->tenant->projects->where('status', '<>', 'Award')->where('status', '<>', 'Archive');
                    
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
        
       $request->request->add(['submited_user_id' => $this->tenant->id]); 
       $this->tenant->projects()->save(new Projects($request->all()));
       
       return redirect('/estimate');
   }

   
   public function show($id)
   {
   			 


       $this->data['project'] = $this->tenant->projects->find($id);
       
       $this->data['notes'] = $this->tenant->projects->find($id)->notes()->orderBy('id', 'DESC')->get();

              


     	if($this->data['project']->status=='Award'){
     	
     		return  redirect('/project/'. $id);
     	}
       return view('estimate.overview', $this->data);
   }

   
   public function edit($id)
   {
   
 
			 $this->get_Crew();
		
       $this->data['project'] = $this->tenant->projects->find($id);

       $this->data['notes'] = $this->tenant->projects->find($id)->notes()->orderBy('id', 'DESC')->get();;

       $this->data['contactList'] = $this->tenant->projects->find($id)->mailing_list()->get();


       
       return view('estimate.edit', $this->data);
   }

  
   public function update(Request $request, $id)
   {
       $this->tenant->projects()->find($id)->update($request->all());
       
       return redirect('/estimate/' . $id);
   }
   
   
   public function get_Crew() {
   		$this->data['architects'] = $this->tenant->companies->where('type', 'Architect');
		  $this->data['struct_eng'] = $this->tenant->companies->where('type', 'Structural/Engineer');
		  $this->data['owners'] = $this->tenant->persons;
		  $this->data['op_manager'] = User::where('parent_user_id', $this->tenant->id)->where('role', 'OP Manager')->get();
		  $this->data['estimators'] = User::where('parent_user_id', $this->tenant->id)->where('role', 'Estimator')->get();
   }
}
