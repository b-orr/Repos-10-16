<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
  protected $table = 'eq_sub_categories';

  protected $fillable = [
      'name',
  ];

  public function category()
  {
      return $this->belongsTo('App\Categories');
  }
}
