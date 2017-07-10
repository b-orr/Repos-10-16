<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FieldsValues extends Model
{
    protected $table = 'fields_value';
        
    protected $fillable = [
        'fields_id', 'value', 
    ];


    public function user()
		{
		   return $this->belongsTo('App\Fields');
		}
 
}
