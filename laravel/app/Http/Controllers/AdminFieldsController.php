<?php

namespace App\Http\Controllers;

use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsController extends Controller
{
    
    public $data;
    public $user;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->middleware(function ($request, $next) {
                  $this->data['user']=$this->user= Auth::user();
           
                return $next($request);
        });
        
        $this->data['site_area']='Admin';
        $this->data['fields'] = New Fields;
        
     
    }
    
    public function index()
    {
        $this->data['lists'] = $this->user->fields;
        return view('admin/fields/list', $this->data);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        $this->user->fields()->save(new Fields($request->all()));
        
        return redirect('/admin/fields');
    }

    
    public function edit($fields)
    {
        $this->data['field']=$this->user->fields()->find($fields);
    
        
         if(!empty($this->data['field'])){
         	return view('admin/fields/edit', $this->data);
         }else {
         	return redirect('/admin/fields');
         }
    }

    
    public function update(Request $request, $fields)
    {
        $this->user->fields()->find($fields)->update($request->all());
        
        return redirect('/admin/fields');
    }

     
    public function destroy($fields)
    {
        $this->user->fields()->find($fields)->delete();
        
        return redirect('/admin/fields');
    }
}
