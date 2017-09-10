<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteMailingList extends Model
{
  	protected $table = 'note_mailing_list';

	protected $fillable = [
	    'pj_project_id','person_id',
	];

	public function project() {
	  	return $this->belongsTo('App\Projects', 'pj_project_id');
	}

	public function person() {
	  	return $this->belongsTo('App\Persons', 'person_id');
	}

}
