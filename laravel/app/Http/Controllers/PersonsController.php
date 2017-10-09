<?php

namespace App\Http\Controllers;

use App\User;
use App\Persons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonsController extends Controller
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
                return $next($request);
        });
        
        $this->data['site_area']='Contacts';
     
    }
    
   
 
   
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [ 'first_name' => 'required', 
                                    'last_name' => 'required',
                                    'company_association' => 'required',
                                    'email' => 'required|email'
                        ]);

        

       
            list($ID,$Name) = explode('|', $request->company_association);
            $request->request->add(['company_association' => $ID]);
      
          
        $this->tenant->persons()->save(new Persons($request->all()));
        
        return redirect('/contacts');
    }

    
    public function edit($persons)
    {
        $this->data['person']=$this->tenant->persons()->find($persons);
        
        $this->data['locations'] = $this->tenant->companies->find($this->data['person']->company_association)->locations;

        $this->data['companies'] = $this->tenant->companies;

        $this->data['location'] = $this->tenant->companies->find($this->data['person']->company_association)->locations->find($this->data['person']->office_location);
       
        
        
         if(!empty($this->data['person'])){
         	return view('contacts/persons/edit', $this->data);
         }else {
         	return redirect('/contacts');
         }
    }

    
    public function update(Request $request, $persons)
    {

        //list($ID,$Name) = explode('|', $request->company_association);
        //$request->request->add(['company_association' => $Name]);

        $this->tenant->persons()->find($persons)->update($request->all());
        
        return redirect('/contacts');
    }

     
    public function destroy($persons)
    {
        $this->tenant->persons()->find($persons)->delete();
        
        return redirect('/contacts');
    }
}