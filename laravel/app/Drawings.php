<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Drawings extends Model
{
    protected $table = 'drw_drawings';
    
    
    protected $fillable = [
        'drawing_name', 'description', 'revisited_num', 'drawing_date', 'image_org', 'image_thumb', 'drw_upload_id', 'drw_discipline_id'
    ];


    public function folders()
    {
      return $this->belongsTo('App\Folders');
    }
    
    public function Uploads()
    {
      return $this->hasOne('App\Uploads', 'id', 'drw_upload_id');
    }

}
