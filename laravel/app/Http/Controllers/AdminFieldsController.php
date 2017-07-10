<?php

namespace App\Http\Controllers;

use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsController extends Controller
{
    
    public $data;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->data['site_area']='Admin';
     
    }
    
    public function index()
    {
        $this->data['lists'] = Auth::user()->fields;
        return view('admin/fields/list', $this->data);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required']);
          
        Auth::user()->fields()->save(new Fields($request->all()));
        
        return redirect('/admin/fields');
    }

    
    public function edit($fields)
    {
        $this->data['field']=Auth::user()->fields()->find($fields);
        
         if(!empty($this->data['field'])){
         	return view('admin/fields/edit', $this->data);
         }else {
         	return redirect('/admin/fields');
         }
    }

    
    public function update(Request $request, $fields)
    {
        Auth::user()->fields()->find($fields)->update($request->all());
        
        return redirect('/admin/fields');
    }

     
    public function destroy($fields)
    {
        Auth::user()->fields()->find($fields)->delete();
        
        return redirect('/admin/fields');
    }}
