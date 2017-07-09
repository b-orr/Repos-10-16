<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
