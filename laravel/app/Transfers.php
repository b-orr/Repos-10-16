<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    protected $table = 'eq_trucking_requests';

    protected $fillable = [
        'project_id', 'status', 'pickup_date', 'delivery_date', 'shipped_from', 'shipped_to', 'loaded_by', 'delivery_contact', 'delivery_number', 'freight_line', 'total_weight', 'load_scheduled', 'load_actual', 'load_departure', 'created_by', 'comments'
    ];

 	public function project()
  	{
   		return $this->belongsTo('App\Projects', 'project_id');
  	}
}
