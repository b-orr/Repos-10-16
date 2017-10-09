<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
  protected $table = 'con_persons';

  protected $fillable = [
      'user_id', 'first_name', 'last_name', 'email', 'title', 'direct_line', 'cell_phone', 'company_association','office_location', 
  ];

   

  public function user()
  {
  	return $this->belongsTo('App\User', 'user_id');
  }

  public function projects() {
      	
      	return $this->hasMany('App\Projects', 'user_id');
  }

  public function company() {

        return $this->hasOne('App\Companies', 'id', 'company_association');
  }

  public function companyLocation() {
        
        return $this->hasOne('App\companyLocation', 'id' ,'office_location');
  }
  
}

