<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use App\Http\Requests\CreateProjectRequest;

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

    public function create(){
        return view('projects.create');       
    }

    public function store(CreateProjectRequest $request){
        //si los nombres de los input coinciden con los nombres de la tabla
        //Project::create($request->all());
        /*
        Project::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'descripcion' => $request->get('descripcion')
        ]);
        */        
        //Project::create($request()->only('title','url','descripcion'));
        /*
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'descripcion' => 'required'
        ]);
        */
        Project::create($request->validated());

        return redirect()->route('projects.index');
    }

    public function edit(Project $project){
        return view('projects.edit',[            
            'project' => $project
        ]);
    }
    //considerar q se puede utilizar CreateProjectRequest tanto para crear como para actualizar
    public function update(CreateProjectRequest $request,Project $project){
        /*
        $project->update([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'descripcion' => $request->get('descripcion')
        ]);
        */
        $project->update($request->validated());

        return redirect()->route('projects.show',$project);
    }
}
