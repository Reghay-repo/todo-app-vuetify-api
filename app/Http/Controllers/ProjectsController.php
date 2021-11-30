<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public  function add_project(Request $request) {
        $project = [
            'content' =>$request->information,
            'due' => $request->due,
            'status' => $request->status,
            'title' => $request->title,
            'person' => $request->person
        ];
        Project::create($project);

        return response()->json(['success' =>true, 'project' => $project]);
    }


    public function get_projects () {
        $projects = Project::all();

        //return resp
        return response()->json(['success' => true, 'projects' => $projects]);
    }


}
