<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/jobs', function () {
//     $title = 'Avail,dfgjknnds';
//     $jobs = [
//         'Software Engineer',
//         'System Analyst',
//         'Database Administrator'
//     ];
//     return view('jobs.jobs', compact('title', 'jobs'));
// });

//Route::get("/jobs", function () {
//    $jobs = [
//        'Software Engineer',
//        'Web Developer',
//        'Data Scientist',
//    ];
//    $title= "Dynamic Available Jobs";
//
//    //Passing data with the with() function
//    //return view("jobs.index")->with("title","Dynamic Available Jobs" );
//
//    //Passing data as an array
//    //return view('jobs.index', ["title"=> "Dynamic Available Jobs", "jobs"=> $jobs]);
//
//    //Passing data with the compact() function
//    //return view('jobs.index', compact('title', 'jobs'));
//});

// Route::get('/jobs', [JobController::class, 'index']);


Route::resource('jobs', JobController::class);



//Route::get('/home', function () {
//    return view("pages.home", ["title"=> "HomePage"]);
//});
//
//Route::get('/contacts', function () {
//    $listOfContacts = [
//        ["name"=> "First Contact", "id"=> "1", "email"=> "first@email.com"],
//        ["name"=> "Second Contact", "id"=> "2", "email"=> "second@email.com"],
//        ["name"=> "Third Contact", "id"=> "3", "email"=> "third@email.com"],
//    ];
//
//    return view("pages.contacts", ["listOfContacts" => $listOfContacts]);
//});
//
//Route::get('/contacts/{id}', function ($id) {
//    return view("pages.contact", ["id" => $id]);
//});
