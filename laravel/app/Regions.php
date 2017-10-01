<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'regions';

    protected $fillable = [
        'user_id', 'name','address','city','state','phone','yard_toggle_switch','active','dnd',
    ];


    public function user()
		{
		   return $this->belongsTo('App\User');
		}

    public function regionequipment()
    {
      return $this->hasMany('App\RegionEquipment', 'region_id');
    }
}
