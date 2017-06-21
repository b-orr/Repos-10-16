<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SuperController extends Controller
{

		public function __construct()
		{
		    $this->middleware('auth');
		    
		    $this->middleware('role:super');
		 
		}
		
    
    public function index()
    {
    		$data['lists'] = User::whereIn('role', ['super', 'tenant'])->get();
        return view('super/super', $data);
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
           
        User::create($request->all());
        
        return redirect('/super');
    }

   
 
    public function edit($super)
    {
    			$data['user']=User::find($super);
    	 
          if(!empty($data['user'])){
          	return view('super/edit', $data);
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
