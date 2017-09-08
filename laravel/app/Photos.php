<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
      protected $table = 'pj_photos';

  protected $fillable = [
      'photo_name', 'subfolder_id','size', 
  ];
  public function subfolder()
  {
      return $this->belongsTo('App\PhotosSubFolders', 'subfolder_id');
  }
  

}