<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplines extends Model
{
    protected $table = 'drw_disciplines';

    protected $fillable = [
      'discipline_name', 'abbreviation'
 	];



}
