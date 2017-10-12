<?php

namespace App\Http\Controllers;

use App\User;
use App\Fields;
use App\Userregion;
use Db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller {

    public $data;
    public $user;
    public $tenant;

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('role:super,tenant');

        $this->middleware(function ($request, $next) {
            $this->data['tenant'] = $this->tenant = User::findTenant(Auth::user());
            $this->data['user'] = $this->user = Auth::user();
            return $next($request);
        });

        $this->data['fields'] = New Fields;
        $this->data['site_area'] = 'Admin';
    }

    public function index() {
        $this->data['lists'] = User::where('parent_user_id', $this->tenant->id)->get();


        $this->data['regions'] = $this->tenant->regions;
        return view('admin/users/list', $this->data);
    }

    public function create() {

        $this->data['regions'] = $this->tenant->regions;

        return view('admin/users/add', $this->data);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        $request->request->add(['parent_user_id' => $this->tenant->id]);
        $regioncount = count($request['region']);
        $user = User::create($request->all());
        $default_region = $request->region_id;
        $user_id = $user->id;

        if ($user) {
            for ($i = 0; $i < $regioncount; $i++) {
                $default_reg = 0;
                if ($default_region == $request['region'][$i]) {
                    $default_reg = 1;
                }
                $regions = new Userregion();
                $regions->user_id = $user_id;
                $regions->region_id = $request['region'][$i];
                $regions->is_default = $default_reg;
                $regions->save();
            }
        }
        return redirect('/admin/users');
    }

    public function edit($user) {
        $user_region_array=[];
        $this->data['list'] = User::where('parent_user_id', $this->tenant->id)->where('id', $user)->first();
        $user_regions=Userregion::where('user_id', $user)->get();
        if($user_regions){
            foreach($user_regions as $region){
                $user_region_array[$region->region_id]=$region->is_default;
            }
        }
        $this->data['list_region'] = $user_region_array;
        $this->data['regions'] = $this->tenant->regions;
        if (!empty($this->data['list'])) {
            return view('admin/users/edit', $this->data);
        } else {
            return redirect('/admin/users');
        }
    }

    public function update(Request $request, $user) {
        if ($request->password == '') {
            $request->request->remove('password');
        }
        $user = User::find($user);
        $userupdate = $user->update($request->all());
        $default_region = $request->region_id;
        $user->userregions()->detach();
        $user->userregions()->delete();
        $regioncount = count($request['region']);
        if ($userupdate) {
            for ($i = 0; $i < $regioncount; $i++) {
                $default_reg = 0;
                if($regioncount == 1){
                    $default_reg = 1;
                }elseif ($default_region == $request['region'][$i]) {
                    $default_reg = 1;
                }
                $regions = new Userregion();
                $regions->user_id = $user->id;
                $regions->region_id = $request['region'][$i];
                $regions->is_default = $default_reg;
                $regions->save();
            }
        }


        return redirect('/admin/users');
    }

    public function destroy($user_id) {
        $user = User::where('parent_user_id', $this->tenant->id)->where('id', $user_id)->first();

        $user->delete();

        return redirect('/admin/users');
    }

}
