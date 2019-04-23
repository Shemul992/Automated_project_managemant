<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Application;
use Session;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except' => ['index']]);
    } //func

    public function index()
    {
        $projects = Project::all();

        //$userCollections[] = array();
        $userCollections = collect();
        foreach($projects as $project){
            $userCollections->add(User::findOrFail($project->owner_id));
        }

        return view('project.all_projects_list')->withUsers($userCollections)->withProjects($projects);

    }//func

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(auth()->id());
        
        if($user->role == 2) abort(403);

        return view('project.create_project');   
    } //func

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        $project->title = $request->title;
        $project->description = $request->description;
        $project->synopsis = $request->synopsis;
        $project->skills = $request->skills;
        $project->deadline = $request->deadline;
        
        $project->owner_id = auth()->id();
         
        $project->save();

        Session::flash('success', 'A new Project  is created successfully');

        return redirect("/view-a-project/$project->id/$project->owner_id");
    } //func

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewSingleProject($project_id , $owner_id)
    {
        $project = Project::findOrFail($project_id);
        $owner   = User::findOrFail($project->owner_id);
        $application = Application::where('user_id', $owner->id)
                                   ->where('project_id', $project_id)
                                   ->first();

       // $application = Application::
       // dd($application);
        return view('project.single_project')->withProject($project)->withOwner($owner)->withApplication($application);
    }//func

    public function myProjects(){
        
        $currentUser = User::findOrFail(auth()->id());

        if($currentUser->role == 2) abort(403);

        $projects = Project::where('owner_id', auth()->id())->get();
        
        $userCollections = collect();
        foreach($projects as $project){
            $userCollections->add(User::findOrFail($project->owner_id));
        }

        return view('project.all_projects_list')->withUsers($userCollections)->withProjects($projects);        

    } //func

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects');
    }//func

    public function viewMyProjects(){
        
        $projects = auth()->user()->projects;
        $userCollections = collect();
        foreach($projects as $project){
            $userCollections->add(User::findOrFail( auth()->id() ) );
        }//

        return view('project.all_projects_list')->withProjects($projects)->withUsers($userCollections);
    } //func


}//class
