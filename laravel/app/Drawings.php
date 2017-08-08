<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Drawings extends Model
{
    protected $table = 'drw_drawings';
    
    
    protected $fillable = [
        'drawing_name', 'description', 'revisited_num', 'drawing_date'
    ];


    public function folders()
    {
      return $this->belongsTo('App\Folders');
    }



    // method for uploading file
    public function uploadFIle() {
        	// code
    }

    
    public function findUploads() {
            
            $uploads = DB::table('drw_uploads')
                ->get();

            return $uploads;       
        }   
    
}
