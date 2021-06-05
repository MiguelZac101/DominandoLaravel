<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //$portafolio = DB::table('projects')->get();
        //$portafolio = Project::orderBy('created_at','DESC')->get();
        //$portafolio = Project::latest()->get();//igual q orderBy x created:at
        $projects = Project::latest()->paginate(1);

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        return view('projects.show',[
            //'project' => Project::findorFail($id)
            'project' => $project
        ]);
        
    }
}