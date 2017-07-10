<?php

namespace App\Http\Controllers;

use App\Fields;
use App\FieldsValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFieldsValueController extends Controller
{
  
    
    public function store(Request $request)
    {
        $this->validate($request, [ 'value' => 'required']);
          
        Auth::user()->fields()->find($request->fields_id)->fieldValues()->save(new FieldsValues($request->all()));
        
        return redirect('/admin/fields');
    }

    
    public function destroy($field)
    {
    
    	 $field = explode('|', $field);
        Auth::user()->fields()->find($field[0])->fieldValues()->find($field[1])->delete();
        
        return redirect('/admin/fields');
        
    }
}
