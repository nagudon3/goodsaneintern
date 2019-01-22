<?php
use App\Task;
Route::get('/', "TaskController@index");
Route::post("/task", "TaskController@store");
Route::get("/{id}/complete", "TaskController@complete")->name('complete');
Route::get("/{id}/delete", "TaskController@destroy")->name('delete');
Route::get("/{id}/incomplete", "TaskController@incomplete")->name('incomplete');
Route::get("/{id}/edit", "TaskController@edit")->name('edit');
Route::get("/{id}/update", "TaskController@update")->name('update');
Route::resource('tasks','TaskController');
Route::redirect('/abc', 'rdx', 301);
Route::get('rdx', function(){
    return "Hello!";
});

// Route::get('greeting', function (){
//     return view('welcome', ['name' => 'Nazrul']);
// });


// Route::view('/welcome', 'welcome');
// Route::get('/nama/{name?}', function ($name = "abcx"){
//     return $name;
// });

Route::middleware(['first', 'second'])->group(function () {
    Route::get('table/{number?}', function($number = 2) {
        for($i=1; $i<=10; $i++){
            echo "$i * $number = ". $i*$number . "<br>";
        }
    })->where('number', '[0-9]+');
    
    Route::get('/nama/{name?}', function ($name = "abcx"){
        return $name;
    });
});

// Route::get('task/{id}', function($id){
//     //
// });

Route::get('/nama/{name}', function ($name){
    return $name;
})->where('name', 'A-Za-z]+');

Route::get('search/{search}', function ($search){
    return $search;
})->where('search', '.*');

Route::prefix('daaa')->group(function(){
    Route::get('table/{number?}', function($number = 2) {
        for($i=1; $i<=10; $i++){
            echo "$i * $number = ". $i*$number . "<br>";
        }
    })->where('number', '[0-9]+');
});

Route::get("check-md", ["uses"=>"HomeController@checkMD", "middleware"=>"checkType"]);

Route::name('nas.')->group(function (){
    Route::get('ta', function() {
        return "helo wel";
    })->name('sas');
});

Route::get('api/tasks/{task}', function (App\Task $task) {
    if ($task->iscompleted==0)
    {
        return "Not done";
    }else{
        return "Done";
    }
});

Route::get('description/{task}', function (App\Task $task){
    return "The task ". $task->task . "is created at ". $task->created_at . "<br >";
});

Route::fallback(function (){
    return "404 can't be here";
    
});

// Route::middleware('auth:api', 'throttle:60,1')->group(function (){
//     Route::get('/user', function(){
//     return "ancjad";
//     });
// });

//Accessing current route
$route = Route::current();
$name = Route::currentRouteName();
$action = Route::currentRouteAction();