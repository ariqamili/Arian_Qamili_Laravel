<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view("pages.home", ["title"=> "HomePage"]);
});

Route::get('/contacts', function () {
    $listOfContacts = [
        ["name"=> "First Contact", "id"=> "1", "email"=> "first@email.com"],
        ["name"=> "Second Contact", "id"=> "2", "email"=> "second@email.com"],
        ["name"=> "Third Contact", "id"=> "3", "email"=> "third@email.com"],
    ];

    return view("pages.contacts", ["listOfContacts" => $listOfContacts]);
});

Route::get('/contacts/{id}', function ($id) {
    return view("pages.contact", ["id" => $id]);
});
