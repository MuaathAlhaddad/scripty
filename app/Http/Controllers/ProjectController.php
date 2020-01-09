<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($this->validateAttributes());
        return redirect()->route('projects.index');
    }

    public function show()
    {
        return view('projects.show', ['project' => Project::findOrFail(request('project_id'))] );
    }

    public function edit()
    {

        return view('projects.edit', ['project' => Project::findOrFail(request('project_id'))]);
    }

    public function update()
    {
        Project::findOrFail(request('project_id'))->update($this->validateAttributes());
        return redirect()->route('projects.index')->with('message', 'UPDATE SUCCESSFULLY');
    }

    public function validateAttributes() {
         return request()->validate([
            'title'          => 'required',
            'body_script'   => 'required',
            'completed_at'  => 'required',
            'duration'      => 'required'   
        ]);
    }

    public function destroy()
    {
        Project::find(request('project_id'))->delete();

        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
