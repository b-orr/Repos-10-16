<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class SuperController extends Controller
{
		public $data;
		
		public function __construct()
		{
		    $this->middleware('auth');
		    $this->middleware('role:super');
		}
		
    
    public function index()
    {
    		$this->data['lists'] = User::whereIn('role', ['super', 'tenant'])->get();
        return view('super/list', $this->data);
    }
    
       
    public function store(Request $request)
    {
        $this->validate($request, [
               'company' => 'required',
               'phone1' => 'required',
               'address' => 'required',
               'city' => 'required',
               'name' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required',
               
           ]);



                       
        $firstID = User::create($request->all())->id;

        //da se koregira ako ima potreba
        
        $now = Carbon::now();

        DB::table('regions')->insert(              
                
                [
                    'user_id' => $firstID,
                    'name' => $request->city, 
                    'address' => $request->address, 
                    'city'=>$request->city,
                    'state'=>$request->state,
                    'phone'=>$request->phone1,
                    'created_at' => $now,
                    'updated_at' => $now,
                    'yard_toggle_switch'=>'0',
                    'active'=>'1'
                ]
            );
        
          
        return redirect('/super');
    }

   
 
    public function edit($super)
    {
    			$this->data['user']=User::find($super);
    	 
          if(!empty($this->data['user'])){
          	return view('super/edit', $this->data);
          }else {
          	return redirect('/super');
          }
    }

    
    public function update(Request $request, $super)
    {
        User::find($super)->update($request->all());
        
        return redirect('/super');
    }

     
    public function destroy($super)
    {
        User::destroy($super);
        
        return redirect('/super');
    }
}
