<?php

namespace App;

use Illuminate\Support\Facades\Route;

class Permissions 
{
  	public function getList() {
  		
  		$routes = Route::getRoutes();
  		$list='';
  		
  		foreach ($routes as $route) {
  		 
  		 	$segments =  explode('.', $route->getName());
  			
  			if(count($segments)==3){
  				if($segments[2]!='store' && $segments[2]!='show' && $segments[2]!='update')
  				$list[$segments[0]][$segments[2]]='';
  			}
  			
  			if(count($segments)==1 && strpos($segments[0], '-') !== false){
  				$list[$segments[0]]='';
  			}
  		  
  		}
  		
  		return $list;
   
  	}
  	
  	public function doIHaveAccess() {
  		return  \Request::route()->getName();
  	}
}
