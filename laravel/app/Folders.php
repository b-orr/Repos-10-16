<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Folders extends Model
{
    protected $table = 'drw_folders';

    
    protected $fillable = [
        'folder_name', 'last_change_user_id', 'pj_project_id'
    ];


    public function drawings()
    {
      return $this->hasMany('App\Drawings');
    }    
    

}
