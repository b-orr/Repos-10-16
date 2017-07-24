<?php

namespace App\Http\Controllers;

use App\FieldsRecords;
use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsRecordsController extends Controller
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
        
        $this->data['site_area']='Admin';
     
    }
    
    public function store(Request $request)
    {
          
        $this->user->fields()->find($request->fields_id)->fieldRecords()->save(new FieldsRecords($request->all()));
        
        return redirect()->back();
    }

    
    public function destroy($field)
    {
    	 $field = explode('|', $field);
        $this->user->fields()->find($field[0])->fieldRecords()->find($field[1])->delete();
        
        return redirect()->back();
        
    }
}
