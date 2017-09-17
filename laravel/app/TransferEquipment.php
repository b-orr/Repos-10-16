<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferEquipment extends Model
{
    protected $table = 'eq_transfer_equipment';

    protected $fillable = [
        'transfer_id', 'rental_id', 'equipment_id', 'project_id', 'quantity', 'name', 'weight', 'total_weight', 'tracking_number'
    ];

 	public function transfer()
  	{
   		return $this->belongsTo('App\Transfers', 'transfer_id');
  	}

  	public function regionEquipment()
  	{
  		return $this->belongsTo('App\regionEquipment', 'equipment_id');
  	}

    public function project()
    {
      return $this->belongsTo('App\Projects', 'project_id');
    }
}
