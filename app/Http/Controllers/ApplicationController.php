<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\User;
use App\Project;
use Session;

class ApplicationController extends Controller
{
    public function applyProject(Request $request, $project_id){
    	
    	$application = new Application(); 
    	$application->project_id = $project_id;
    	$application->user_id = auth()->id();
    	$application->message_body = $request->message_body;

    	$application->save();

    	$project = Project::findOrFail($project_id);
    	$owner = User::findOrFail(auth()->id());

        Session::flash('success', 'Successfully applied in this project');

    	return view('project.single_project')->withApplication($application)->withProject($project)->withOwner($owner);

    }//func

    public function deleteProjectApplication($project_id, $user_id){

    	
        $project = Project::findOrFail($project_id);
        $owner   = User::findOrFail($project->owner_id);
        $application = Application::where('user_id', $user_id)
                                   ->where('project_id', $project_id)
                                   ->first();

        if(is_null($application) == false) $application->delete();

       // $application = Application::
       // dd($application);

        return redirect("/view-a-project/$project_id/$user_id");

    } //func

    public function seeAllApplicants($project_id){

        $project = Project::findOrFail($project_id);
        $applications = $project->applications;

        $userCollections = collect();

        foreach($applications as $app){
            $userCollections->add(User::findOrFail($app->user_id));
        } //for

        return view('request.job_requests')->withApplications($applications)->withProject($project)->withUsers($userCollections);
    } //func
}//class
