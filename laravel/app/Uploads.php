<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table = 'drw_uploads';

    protected $fillable = [
        'filename', 'release_desc', 'release_date', 'location', 'folder_id', 'processed'
    ];

  public function setReleaseDateAttribute($release_date)
	{   
		   $this->attributes['release_date'] = date('Y-m-d', strtotime(str_replace('/', '-',$release_date))); 
	}
}
