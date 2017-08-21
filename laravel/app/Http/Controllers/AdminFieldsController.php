<?php

namespace App\Http\Controllers;

use App\User;
use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsController extends Controller
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
        
        $this->data['site_area']='Admin';
        $this->data['fields'] = New Fields;
        
     
    }
    
    public function index()
    {
        $this->data['lists'] = $this->tenant->fields;
        return view('admin/fields/list', $this->data);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        $this->tenant->fields()->save(new Fields($request->all()));
        
        return redirect('/admin/fields');
    }

    
    public function edit($fields)
    {
        $this->data['field']=$this->tenant->fields()->find($fields);
    
        
         if(!empty($this->data['field'])){
         	return view('admin/fields/edit', $this->data);
         }else {
         	return redirect('/admin/fields');
         }
    }

    
    public function update(Request $request, $fields)
    {
        $this->tenant->fields()->find($fields)->update($request->all());
        
        return redirect('/admin/fields');
    }

     
    public function destroy($fields)
    {
        $this->tenant->fields()->find($fields)->delete();
        
        return redirect('/admin/fields');
    }
}
