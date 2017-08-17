<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truckings extends Model
{
    protected $table = 'eq_trucking_requests';

    protected $fillable = [
        'project_id', 'status', 'pickup_date', 'requested_time', 'delivery_date', 'shipped_from', 'shipped_to', 'site_contact', 'delivery_contact', 'freight_line', 'size_truck', 'loading_method', 'total_weight', 'created_by', 'comments'
    ];

 	public function project()
  	{
   		return $this->belongsTo('App\Projects', 'project_id');
  	}
  	
  	public function equipment()
  	{
  		return $this->hasMany('App\TruckingEquipment', 'truck_id');
  	}
}
