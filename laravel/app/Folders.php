<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Folders extends Model
{
    protected $table = 'drw_folders';

    
    protected $fillable = [
        'folder_name', 'folder_description', 'last_change_user_id', 'pj_project_id'
    ];


    public function drawings()
    {
      return $this->hasMany('App\Drawings', 'drw_folder_id');
    }
    
    public function uploads()
    {
      return $this->hasMany('App\Uploads', 'folder_id');
    }
    
    public function last_user()
    {
      return $this->hasOne('App\User', 'id', 'last_change_user_id');
    }
    
    public function project()
	  {
	   	return $this->belongsTo('App\Projects', 'pj_project_id');
	  }   

    public function last_change()
    {
      return $this->hasOne('App\User', 'id', 'last_change_user_id');
    }
    

}
