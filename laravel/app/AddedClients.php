<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedClients extends Model
{
    protected $table = 'added_clients';

	protected $fillable = [
	    'pj_project_id','client_id',
	];

	public function project() {
	  	return $this->belongsTo('App\Projects', 'pj_project_id');
	}

	public function company() {
	  	return $this->belongsTo('App\Companies', 'client_id');
	}

}
