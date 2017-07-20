<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'pj_projects';
    
    protected $fillable = [
        'user_id', 'submited_user_id', 'rating', 'name', 'address', 'city', 'state', 'zip', 'structure_use', 'structure_type', 'status', 'bid_date', 'bid_time', 'bid_site_address', 'bid_username', 'bid_password', 'scope', 'start_date', 'est_date', 'duration_start', 'duration_duration', 'duration_finish', 'user_id', 'submited_user_id'
        
    ];


    public function user()
		{
		   return $this->belongsTo('App\User');
		}

    public function folders()
    {
      return $this->hasMany('App\Folders', 'pj_project_id');
    }
    
}
