<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  protected $table = 'con_companies';

  protected $fillable = [
      'user_id', 'name', 'type', 'location_name', 'phone', 'address', 'city', 'state', 'zip',
  ];

   

  public function user()
  {
  	return $this->belongsTo('App\User', 'user_id');
  }
}

