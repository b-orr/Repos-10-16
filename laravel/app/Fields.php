<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    protected $table = 'fields';
    
    protected $fillable = [
        'user_id', 'name', 'page', 'position', 'order',
    ];


    public function user()
		{
		   return $this->belongsTo('App\User');
		}

    public function fieldValues()
    {
      return $this->hasMany('App\FieldsValues');
    }
}
