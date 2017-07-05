<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegionEquipment extends Model
{
  protected $table = 'eq_region_equipment';

  protected $fillable = [
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

  public function category()
  {
      return $this->belongsTo('App\Categories');
  }
}
