<?php

namespace App\Http\Middleware;

use Closure;
use App\Permissions;
use Illuminate\Support\Facades\Auth;

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
    
        $user = Auth::user();
    

    		
    		 //$prm = new Permissions;
    		 //dd($prm->doIHaveAccess());
    		
         foreach($roles as $role) {
            if($user->role == $role){
                return $next($request);
            }
       
    		}
    		
    		
       return redirect('/');
    }
}
