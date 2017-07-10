<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'company', 'phone1', 'phone2', 'address', 'city', 'state', 'zip', 'last_name', 'title', 'group_id', 'region_id', 'active', 'parent_user_id'
    ];
    
    
    protected $attributes = [
            'role' => 'tenant',
     				'phone2' => '',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setPasswordAttribute($password)
    {   
       $this->attributes['password'] = bcrypt($password);
    }
       
    public function regions()
    {
        return $this->hasMany('App\Regions');
    }
    
    public function accessRegion()
    {
        return $this->hasOne('App\Regions', 'id', 'region_id');
    }
    
    public function fields()
    {
        return $this->hasMany('App\Fields');
    }
}
