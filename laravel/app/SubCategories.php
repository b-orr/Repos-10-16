<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
  protected $table = 'eq_sub_categories';

  protected $fillable = [
      'category_id', 'name',
  ];

  public function category()
  {
      return $this->belongsTo('App\Category', 'category_id');
  }

  public function equipment()
  {
      return $this->hasMany('App\RegionEquipment', 'sub_category_id');
  }

  public function inventory()
  {
      return $this->hasMany('App\Inventory', 'sub_category_id');
  }
}
