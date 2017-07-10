<?php

namespace App\Http\Controllers;

use App\User;
use Db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public $data;
    public $user;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        
        $this->middleware(function ($request, $next) {
                $this->user= Auth::user();
                return $next($request);
        });
        
        
        $this->data['site_area']='Admin';
     
    }
    
    public function index()
    {
        $this->data['lists'] = User::where('parent_user_id', $this->user->id)->get();
         
        
        $this->data['regions'] =  $this->user->regions;
        return view('admin/users/list', $this->data);
    }

   
    public function store(Request $request)
    {
       $this->validate($request, [
              'title' => 'required', 
              'name' => 'required',
              'last_name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required',
              
          ]);
        
        $request->request->add(['parent_user_id' => $this->user->id]);
       	User::create($request->all());      
        return redirect('/admin/users');
    }

    
    public function edit($user)
    {
        $this->data['list']=User::where('parent_user_id', $this->user->id)->where('id', $user)->first();
        
        $this->data['regions'] =  $this->user->regions;
         if(!empty($this->data['list'])){
         	return view('admin/users/edit', $this->data);
         }else {
         	return redirect('/admin/users');
         }
    }

    
    public function update(Request $request, $user)
    {
        User::find($user)->update($request->all());
        
        return redirect('/admin/users');
    }

     
    public function destroy($user_id)
    {
        $user = User::where('parent_user_id', $this->user->id)->where('id', $user_id)->first();
        
        $user->delete();
        
        return redirect('/admin/users');
    }
}
