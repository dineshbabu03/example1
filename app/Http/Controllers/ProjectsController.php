<?php

namespace App\Http\Controllers;
Use \App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('projects.project', compact('projects'));
    }

    public function show($id)
    {
    	$projects = Project::findOrFail($id);

    	return view('projects.show', compact('projects'));
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function store()
    {
    	$data_validated = request()->validate([
    		'title' => ['required', 'min:5'],
    		'description' => ['required', 'min:15']
    	]);

    	Project::create($data_validated);

    	return redirect('/project');
    }

    public function edit($id)
    {
    	$project = Project::find($id);
    	
    	return view('projects.edit', compact('project'));
    }

     public function update($id)
    {
    	// $project->update(request(['title','description']));
    	$project = Project::findOrFail($id);

    	$project->title = request('title');
    	$project->description = request('description');

    	$project->save();

    	return redirect('/project');
    }

    public function destroy($id)
    {
    	$project = Project::findOrFail($id)->delete();

    	return redirect('/project');
    }
}
