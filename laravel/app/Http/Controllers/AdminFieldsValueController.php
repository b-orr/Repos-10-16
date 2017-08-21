<?php

namespace App\Http\Controllers;

use App\Fields;
use App\User;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsValueController extends Controller
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
     
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [ 'value' => 'required']);
          
        $this->tenant->fields()->find($request->fields_id)->fieldValues()->save(new FieldsValues($request->all()));
        
        return redirect('/admin/fields');
    }

    
    public function destroy($field)
    {
    
    	 $field = explode('|', $field);
        $this->tenant->fields()->find($field[0])->fieldValues()->find($field[1])->delete();
        
        return redirect('/admin/fields');
        
    }
}
