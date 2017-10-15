<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyLocations extends Model
{
	protected $table = 'con_company_locations';

  	protected $fillable = [
	    'company_id', 'location_name', 'phone', 'address', 'city', 'state', 'zip', 'areas'
  	];

   

  public function company()
  {
  	return $this->belongsTo('App\Companies', 'company_id');
  }
}
