<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'pj_projects';
    
    protected $fillable = [
        'user_id', 'submited_user_id', 'rating', 'name', 'address', 'city', 'state', 'zip', 'structure_use', 'structure_type', 'status', 'bid_date', 'bid_time', 'bid_site_address', 'bid_username', 'bid_password', 'scope', 'start_date', 'est_date', 'duration_start', 'duration_duration', 'duration_finish', 'user_id', 'submited_user_id', 'architect', 'struct_eng', 'description', 'prevailing_wage', 'wrap_up', 'performance_bond', 'op_manager', 'estimator', 'owner'
        
    ];

		
		public function setBidDateAttribute($bid_date)
		{   
		
	 
		   $this->attributes['bid_date'] = date('Y-m-d', strtotime(str_replace('/', '-',$bid_date))); 
		}
		
		public function setStartDateAttribute($start_date)
		{   
		   $this->attributes['start_date']= date('Y-m-d', strtotime(str_replace('/', '-',$start_date))); 
		}
		
		public function setEstDateAttribute($est_date)
		{   
		   $this->attributes['est_date'] = date('Y-m-d', strtotime(str_replace('/', '-',$est_date))); 
		}

    public function user()
		{
		   return $this->belongsTo('App\User');
		}

    public function folders()
    {
      return $this->hasMany('App\Folders', 'pj_project_id');
    }
    
    public function bids()
    {
      return $this->hasMany('App\Bids', 'pj_project_id');
    }
    
    
    public function architect()
    {
      return $this->hasOne('App\Companies', 'id', 'architect');
    }
    
    public function struct_eng()
    {
      return $this->hasOne('App\Companies', 'id', 'struct_eng');
    }
    
    public function owner()
    {
      return $this->hasOne('App\Persons', 'id', 'owner');
    }
    
    public function op_manager()
    {
      return $this->hasOne('App\User', 'id', 'op_manager');
    }
    
    public function estimator()
    {
      return $this->hasOne('App\User', 'id', 'estimator');
    }
    
    
    public function transfers()
    {
        return $this->hasMany('App\Transfers', 'project_id');
    }

    public function truckings()
    {
        return $this->hasMany('App\Truckings', 'project_id');
    }
    
     
}
