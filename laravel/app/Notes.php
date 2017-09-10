<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
  
  protected $table = 'pj_notes';

  protected $fillable = [
      'pj_project_id','user_id','note',
  ];

  public function project() {
      	return $this->belongsTo('App\Projects', 'pj_project_id');
  }

  public function user() {
      	return $this->belongsTo('App\User', 'user_id');
  }


}
