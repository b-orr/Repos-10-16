<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckingEquipment extends Model
{
    protected $table = 'eq_trucking_equipment';

    protected $fillable = [
        'truck_id', 'equipment_id', 'project_id', 'name', 'weight', 'quantity', 'total_weight'
    ];

 	public function trucking()
  	{
   		return $this->belongsTo('App\Truckings', 'truck_id');
  	}

  	public function regionEquipment()
  	{
  		return $this->belongsTo('App\regionEquipment', 'equipment_id');
  	}
}
