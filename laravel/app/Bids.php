<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bids extends Model 
{
    protected $table = 'pj_bid_results';
    
    protected $fillable = [
         'pj_project_id', 'bid_date', 'client', 'scope', 'bid_type', 'drawing_stage', 'start_date', 'man_day_cost', 'bid', 'profit', 'profit_cost', 'csf', 'total_csf', 'sf', 'total_sf', 'cy', 'total_cy', 'lower_bidder', 'price', 'total_need'
        
    ];
        
    public function project()
		{
		   return $this->belongsTo('App\Project');
		}
		
		public function setBidDateAttribute($bid_date)
		{   
		   $this->attributes['bid_date'] = date('Y-m-d', strtotime(str_replace('/', '-',$bid_date))); 
		}
		
		public function setStartDateAttribute($start_date)
		{   
		   $this->attributes['start_date']= date('Y-m-d', strtotime(str_replace('/', '-',$start_date))); 
		}
}