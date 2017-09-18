<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    protected $table = 'usr_groups';
    
    protected $fillable = [
        'user_id', 'name',
    ];


    public function user()
	{
	   return $this->belongsTo('App\User');
	}

	public function groupValues()
    {
      return $this->hasMany('App\UserGroupsValues', 'usr_group_id', 'id');
    }
}
