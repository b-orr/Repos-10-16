<?php

namespace App\Http\Middleware;

use Closure;
use App\Permissions;
use Illuminate\Support\Facades\Auth;
use App\User;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        if (!Auth::check())
            return redirect('/');
    
        $user = User::findTenant(Auth::user());
    
				if(!session()->has('region')){
				     session(['region' => @$user->regions->first()->name]);
				     session(['region_id' => @$user->regions->first()->id]);
				}
				
				
		    		
    		$prm = new Permissions;
    		if(!$prm->doIHaveAccess(Auth::user())){
    			
    			echo '<script>
    			
    			function confirmation() {
    			    if (!confirm("This page is forbidden")) {
    			        window.history.back();
    			    }
    			}
    			
    			confirmation(); 
    			</script>';
    			return redirect('/forbidden');
    		}
    		
	        foreach($roles as $role) {
	        	if($user->role == $role){
	                return $next($request);
	            }
	        }
    		
    		
       return redirect('/forbidden');
    }
}
