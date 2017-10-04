<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  protected $table = 'con_companies';

  protected $fillable = [
      'user_id', 'name', 'type','client_bool'
  ];

   public function locations()
   {
 		return $this->hasMany('App\CompanyLocations', 'company_id');
   }

  public function user()
  {
  	return $this->belongsTo('App\User', 'user_id');
  }
}

