<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosFolders extends Model
{
    protected $table = 'pj_photos_folders';

  protected $fillable = [
      'name', 'project_id',
  ];
}
