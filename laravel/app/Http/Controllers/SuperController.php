<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
           
        User::create($request->all());
        
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
