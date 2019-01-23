<?php
use App\Task;
Route::get('/', "TaskController@index");
Route::post("/task", "TaskController@store");
Route::get("/{id}/complete", "TaskController@complete")->name('complete');
// Route::get("{id}/delete", "TaskController@destroy")->name('delete');
Route::get("/{id}/incomplete", "TaskController@incomplete")->name('incomplete');
Route::get("/{id}/edit", "TaskController@edit")->name('edit');
Route::get("/{id}/update", "TaskController@update")->name('update');
Route::resource('tasks','TaskController');
Route::redirect('/abc', 'rdx', 301);
Route::get('/{id}/sac', "InvokeableController");

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


//Http request
Route::get('/foo/bar', "UriController@index");

// Http request retrieving input
Route::get('/register', function(){
    return view('register');
});
//cookies
Route::post('abcde', array('uses'=> 'UserRegistration@postRegister'));

Route::get('cookie/set', 'CookieController@setCookie');
Route::get('cookie/get', 'CookieController@getCookie');

//basic response
Route::get('basic_reponse', function() {
    return 'Hello World';
});

//response with header and cookies
Route::get('nagudon', function() {
    return response("Helllooo", 200)->header('Content-Type', 'text/html')
    ->withcookie('name', 'nssa');
    // ->header('X-Header-One', 'Header Value')
    // ->header('X-Header-Two', 'Header Value');
});

//json response -- use response()->json
Route::get('json', function() {
    $a = response()->json([
        'name' => 'Nazrul Uzu', 
        'state' => 'Sarawak',
        'country' => 'Malaysia']);
    return $a;
});

//basic view
Route::get('asassss', function(){
    return view('tet');
});
Route::get('jiji', function(){
    return view('jitet');
});

Route::get('passdata', function() {
    return view('test', ['name' => "nazrul oioioioio"]);
});

Route::get('koko', function() {
    return view('helper');
});

Route::get('iop', function(){
    $array = array_add(['name' => 'desk'], 'price', 100);
    $flattened = array_dot($array);
    return $flattened;
});

Route::get('ccnc', function() {
    [$a, $b] = array_divide(['name' => 'Desk']);
    return [$a, $b];
});