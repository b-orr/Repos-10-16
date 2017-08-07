<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
  protected $table = 'con_persons';

  protected $fillable = [
      'user_id', 'first_name', 'last_name', 'email', 'title', 'direct_line', 'cell_phone', 'company_association', 
  ];

   

  public function user()
  {
  	return $this->belongsTo('App\User', 'user_id');
  }
}

