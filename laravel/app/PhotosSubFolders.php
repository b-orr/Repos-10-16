<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosSubFolders extends Model
{
  protected $table = 'pj_photos_subfolders';

  protected $fillable = [
      'folder_id', 'name',
  ];
  public function folders()
  {
      return $this->belongsTo('App\PhotosFolders');
  }
}
