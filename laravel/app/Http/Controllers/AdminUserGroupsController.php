<?php

namespace App\Http\Controllers;

use App\User;
use App\UserGroups;
use App\UserGroupsValues;
use Illuminate\Http\Request;
use App\Permissions;
use Illuminate\Support\Facades\Auth;

class AdminUserGroupsController extends Controller
{
 		
 		public $data;
 		public $user;
 		public $tenant;
 		public $prm;
 		
 		public function __construct()
 		{
 		    $this->middleware('auth');
 		    $this->middleware('role:super,tenant');
 		    
 		    $this->middleware(function ($request, $next) {
 		            $this->data['tenant'] = $this->tenant= User::findTenant(Auth::user());
 		            $this->data['user'] = $this->user= Auth::user();
 		            $this->prm = new Permissions;
 		            return $next($request);
 		    });
 		    
 		    
 		    $this->data['site_area']='Admin';
 		 
 		} 		
 		   
    public function index()
    {
 
        $this->data['lists'] = $this->tenant->groups;

         
        
        return view('admin/usergroups/list', $this->data);
    }
		
		
		public function store(Request $request)
    {
       $this->validate($request, [
              'name' => 'required',
          ]);
        
      	$group = $this->tenant->groups()->save(new UserGroups($request->all())); 

        foreach ($request->values as $key => $value) {
          foreach ($value as $key2 => $value2) {
 
            $col['name']=$key2;
            $col['value']=$value2;
            $group->groupValues()->save(new UserGroupsValues( $col)); 
          }  
        }  
        return redirect('/admin/user_groups');
    }


    public function create()
    {

       $this->data['lists'] = $this->prm->getList();
       $this->data['prm'] = $this->prm;

       return view('admin/usergroups/create', $this->data);
    }

    
    public function edit($group)
    {

        $this->data['lists'] = $this->prm->getList();
        $this->data['prm'] = $this->prm;

        $this->data['group']=$this->tenant->groups()->find($group);
        
        
         if(!empty($this->data['group'])){
         	return view('admin/usergroups/edit', $this->data);
         }else {
         	return redirect('/admin/user_groups');
         }
    }

    
    public function update(Request $request, $group)
    {
         $this->validate($request, [
              'name' => 'required',
          ]);
        
        $this->tenant->groups()->find($group)->update($request->all()); 

        $this->tenant->groups()->find($group)->groupValues()->delete();
        foreach ($request->values as $key => $value) {
          foreach ($value as $key2 => $value2) {
 
            $col['name']=$key2;
            $col['value']=$value2;
            $this->tenant->groups()->find($group)->groupValues()->save(new UserGroupsValues( $col)); 
          }  
        }  
        return redirect('/admin/user_groups/' . $group . '/edit');
    }

     
    public function destroy($group)
    {
        $this->tenant->groups()->find($group)->delete();
        
        return redirect('/admin/user_groups');
    }
    
}
