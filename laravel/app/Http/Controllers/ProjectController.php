<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projects;
use App\States;

class ProjectController extends Controller {

    public $data;
    public $user;
    public $tenant;

    public function __construct() {

        $this->middleware('auth');
        $this->middleware('role:super,tenant');
        $this->middleware(function ($request, $next) {
            $this->data['tenant'] = $this->tenant = User::findTenant(Auth::user());
            $this->data['user'] = $this->user = Auth::user();
            $this->data['projects'] = $this->tenant->projects->where('status', 'Award');

            return $next($request);
        });

        $this->data['site_area'] = 'Projects';
    }

    public function index() {

        return view('project/list', $this->data);
    }

    public function create() {

        $this->get_crew();
       
        $this->data['states'] = States::get();
        return view('project.create', $this->data);
    }

    public function store(Request $request) {
        $this->validate($request, ['name' => 'required', 'bid_username' => 'required','region_id' => 'required']);
        $request->request->add(['submited_user_id' => $this->tenant->id]);
        $this->tenant->projects()->save(new Projects($request->all()));

        return redirect('/project');
    }

    public function show($id) {
        $this->data['project'] = $this->tenant->projects->find($id);
        return view('project.overview', $this->data);
    }

    public function edit($id) {

        $this->get_crew();


        $this->data['project'] = $this->tenant->projects->find($id);
        $this->data['states'] = States::get();


        return view('project.edit', $this->data);
    }

    public function update(Request $request, $id) {
        $this->tenant->projects()->find($id)->update($request->all());

        return redirect('/project/' . $id);
    }

    public function get_crew() {
        $this->data['architects'] = $this->tenant->companies->where('type', 'Architect');
        $this->data['struct_eng'] = $this->tenant->companies->where('type', 'Structural/Engineer');
        $this->data['owners'] = $this->tenant->persons;
        $this->data['op_manager'] = User::where('parent_user_id', $this->tenant->id)->where('role', 'OP Manager')->get();
        $this->data['estimators'] = User::where('parent_user_id', $this->tenant->id)->where('role', 'Estimator')->get();
    }

}
