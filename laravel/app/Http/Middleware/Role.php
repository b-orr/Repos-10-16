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
        $default_region=null;
        $user= \Auth::user();
        if(!session()->has('default_region')){
            
            

            if($user->role==='tenant' || $user->role==='super'){
                $default_region=$user->regions->first();
            }else{
                $default_region=$user->userregions()->where('is_default',1)->first();
            }
            
            
            $request->session()->put('region', $default_region->name);
            $request->session()->put('region_id', $default_region->id);
        }
        
        /*$user = User::findTenant(Auth::user());
    
				if(!session()->has('region')){
				     session(['region' => @$user->regions->first()->name]);
				     session(['region_id' => @$user->regions->first()->id]);
				}
	*/			
				
		    		
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
