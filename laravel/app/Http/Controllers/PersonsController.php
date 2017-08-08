<?php

namespace App\Http\Controllers;

use App\Persons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonsController extends Controller
{
    public $data;
    public $user;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->middleware(function ($request, $next) {
                $this->user= Auth::user();
                return $next($request);
        });
        
        $this->data['site_area']='Contacts';
     
    }
    
   
 
   
    public function store(Request $request)
    {
        $this->validate($request, [ 'first_name' => 'required', 
        												        'last_name' => 'required',
        												        'company_association' => 'required',
        												      
        												        'email' => 'required|email']);
          
        $this->user->persons()->save(new Persons($request->all()));
        
        return redirect('/contacts');
    }

    
    public function edit($persons)
    {
        $this->data['person']=$this->user->persons()->find($persons);
        
         if(!empty($this->data['person'])){
         	return view('contacts/persons/edit', $this->data);
         }else {
         	return redirect('/contacts');
         }
    }

    
    public function update(Request $request, $persons)
    {
        $this->user->persons()->find($persons)->update($request->all());
        
        return redirect('/contacts');
    }

     
    public function destroy($persons)
    {
        $this->user->persons()->find($persons)->delete();
        
        return redirect('/contacts');
    }
}