<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/test", function () {
    return [
        "name" => "Faraz",
        "age" => 21,
        "city" => "Ahmedabad"
    ];
});

Route::get("students", [StudentController::class, "studentList"]);
Route::post("add-student", [StudentController::class, "addStudent"]);
Route::put("update-student", [StudentController::class, "updateStudent"]);
Route::delete("clear-student", [StudentController::class, "deleteStudent"]);