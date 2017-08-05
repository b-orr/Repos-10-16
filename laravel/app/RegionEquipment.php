<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegionEquipment extends Model
{
  protected $table = 'eq_region_equipment';

  protected $fillable = [
      'sub_category_id',
      'region_id',
      'name',
      'manufacturer',
      'model',
      'upc',
      'weight',
      'items_per_unit',
      'notes',
      'type',
      'forecasted',
      'allocated',
      'allocated_qty',
      'picture',
  ];

  public function subcategory()
  {
      return $this->belongsTo('App\SubCategories', 'sub_category_id');
  }

  public function region()
  {
      return $this->belongsTo('App\Regions', 'region_id');
  }
}
