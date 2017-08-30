<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementEquipment extends Model
{
    protected $table = 'eq_requirement_equipment';

    protected $fillable = [
        'requirement_id', 'equipment_id', 'quantity'
    ];

 	public function requirement()
  	{
   		return $this->belongsTo('App\Requirements', 'requirement_id');
  	}

  	public function regionEquipment()
  	{
  		return $this->belongsTo('App\regionEquipment', 'equipment_id');
  	}
}
