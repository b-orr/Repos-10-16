<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'eq_categories';

  protected $fillable = [
      'name', 'allocation_uom',
  ];

  public function subcategories()
  {
      return $this->hasMany('App\SubCategories');
  }
}
