<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'eq_categories';
    protected $fillable = [
        'user_id', 'name', 'allocation_uom',
    ];

    public function subcategories() {
        return $this->hasMany('App\SubCategories', 'category_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

}
