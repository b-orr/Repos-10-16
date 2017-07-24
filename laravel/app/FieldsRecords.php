<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FieldsRecords extends Model
{
    protected $table = 'fields_records';
            
    protected $fillable = [
        'fields_id', 'page_name', 'order', 'value'
    ];


    public function fields()
		{
		   return $this->belongsTo('App\Fields');
		}
		 
}
