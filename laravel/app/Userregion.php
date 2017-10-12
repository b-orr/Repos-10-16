<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userregion extends Authenticatable
{
    use Notifiable;

  public function users(){
       return $this->hasMany('App\User', 'user_id');
      
  }
}
