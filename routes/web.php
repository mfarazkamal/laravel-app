<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => " FARAZ"]);
});

Route::get('/langs', function () {
    $langs = [
        ["name" => "JavaScript", "star" => 5, "id" => 1],
        ["name" => "C++", "star" => 3.5, "id" => 2],
        ["name" => "Java", "star" => 4, "id" => 3],
        ["name" => "PHP", "star" => 5, "id" => 4],
    ];

    return view('lang', ["langs"=> $langs]);
});

Route::get('/langs/{id}', function ($id) {
    $langs = [
        ["name" => "JavaScript", "star" => 5, "id" => 1],
        ["name" => "C++", "star" => 3.5, "id" => 2],
        ["name" => "Java", "star" => 4, "id" => 3],
        ["name" => "PHP", "star" => 5, "id" => 4],
    ];

    return view('langStar', ["lang"=> $langs[$id-1]]);
});
