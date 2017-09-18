<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroupsValues extends Model
{
    protected $table = 'usr_groups_values';
    
    protected $fillable = [
        'usr_group_id', 'name', 'value'
    ];


    public function groups()
	{
	   return $this->belongsTo('App\UserGroups');
	}
}
