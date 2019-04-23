<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//----------------------home pages--------
//for teachers
Route::get('/', function () {
    return view('project.requested_projects');
});
//for students
Route::get('/home', function () {
    return view('welcome');
}); 

//---------------Student List------------
Route::get('view-all-students', 'StackholderController@getStudents');

//---------------Profile-----------------

Route::resource('profiles', 'ProfileController');

Route::get('view-a-profile', function () {
    return view('profile.profile');
});

Route::get('update-a-profile', function () {
    return view('profile.profile_update');
});
//---------Project for teacher ------------------

Route::resource('projects', 'ProjectController');
//view a single project body
Route::get('view-a-project', function () {
    return view('project.single_project');
});
//view a single project with project id, owner id, auth()->id
Route::get('/view-a-project/{project_id}/{owner_id}','ProjectController@viewSingleProject');
//view my(teacher) projects 
Route::get('view-my-projects', 'ProjectController@viewMyProjects');
//Route::get('/view-all-projects','ProjectController@Project');

Route::get('view-a-project-request', function () {
    return view('request.request_body');
});

//-----------------------Application-----------------

//apply in a project(for student)
Route::post('apply-project/{project_id}', 'ApplicationController@applyProject');
// delete application(for student + project ) ---> antone can delete application
Route::get('/delete-application/{project_id}/{user_id}', 'ApplicationController@deleteProjectApplication');

//see all applicants
Route::get('/all-applicants/{project_id}', 'ApplicationController@seeAllApplicants');

Route::get('view-all-interviewers', function () {
    return view('request.accepted_requests_interview');
});

//--------------Notification---------------

Route::get('view-all-notifications', function () {
    return view('notification.notifications_all');
});

//----------------------- Project Idea-------------
//create an idea
Route::get('create-idea', function () {
    return view('idea.idea_create');
});
Route::get('view-all-ideas', function () {
    return view('idea.student_idea_list');
});

Route::get('view-a-student-idea', function () {
    return view('idea.indivisual_project_idea');
});
//---------------Chat-----------------

Route::get('view-all-chats', function () {
    return view('chat.all_chats');
});






Auth::routes();