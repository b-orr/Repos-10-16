<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table = 'drw_uploads';

    protected $fillable = [
        'filename', 'release_desc', 'release_date', 'location', 'folder_id'
    ];

    
}
