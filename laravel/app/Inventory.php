<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'eq_inventory';

  	protected $fillable = [
      	'equipment_id',
        'sub_category_id',
      	'project_id',
      	'reason',
      	'owner',
      	'manager',
      	'quantity',
      	'purchased_from',
      	'purchase_price',
      	'company_id_number'
  	];

  	public function equipment()
  	{
  		return $this->belongsTo('App\RegionEquipment', 'equipment_id');
  	}

  	public function project()
  	{
  		return $this->belongsTo('App\Projects', 'project_id');
  	}

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategories', 'sub_category_id');
    }
}
