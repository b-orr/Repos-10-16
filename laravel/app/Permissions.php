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


    public function translate($value)
    {
      if($value=='index')
        return 'view';

      if($value=='destroy')
        return 'delete';

      return $value;
    }
  	
  	public function doIHaveAccess($user) {
  		$route =  \Request::route()->getName();
  		
  		$list_clean = explode('.', $route);
  		
  		$route = str_replace(' ', '_',  $list_clean[0]);
  		
  		if(isset($list_clean[2])){
  			$route = $route .'_' . $list_clean[2];
  		}
  		
  	 
  		if(!empty($user->permission) && isset($user->permission->groupValues->where('name', $route)->first()->value)){
  			return $user->permission->groupValues->where('name', $route)->first()->value;
  		}else {
  			return 1;
  		}
 		
  		
  	}
}
