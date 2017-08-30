<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $table = 'eq_requirements';

    protected $fillable = [
        'project_id', 'created_by', 'requirement_date', 'phase', 'request_type', 'quantity_type', 'comments'
    ];

    public function project()
    {
    	return $this->belongsTo('App\Projects', 'project_id');
    }
    public function setBidDateAttribute($requirement_date)
		{   
		   $this->attributes['requirement_date'] = date('Y-m-d', strtotime(str_replace('/', '-',$requirement_date))); 
		}

    public function equipment()
    {
        $this->hasMany('App\RequirementEquipment', 'requirement_id');
    }
}
