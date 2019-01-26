<?php
use App\Task;
use App\flight;
use Illuminate\Support\Facades\App;
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

// Route::get('description/{task}', function (App\Task $task){
//     return "The task ". $task->task . "is created at ". $task->created_at . "<br >";
// });

Route::fallback(function (){
    return "Nothing to show";
    
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

Route::get('arrflat', function() {
    $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];
    $flattened = array_flatten($array);
    return $flattened;
});

Route::get('tez', function() {
    $ab = ['products' => ['desk' => ['price' => 100 ]]];
    $ac = ['product' => ['name' => 'Desk', 'price' => 100]];
    $b = array_get($ab, 'products.desk.price');
    $c = array_get($ab, 'products.desk.discount', 0);
    $d = array_set($ab, 'product.desk.price', 200);
    // return $ab;
    return $d;
    // $d = array_has($ac, 'product.name');
    // return $d;
    // return $c;
    // return $b;
});

Route::get('arronly', function() {
    $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];
    $slice = array_only($array, ['name', 'price']);
    return $slice;
});

//Array pluck- use to retrieve the all the value from given key
Route::get('arrpluck', function(){
    $array = [
        ['developer' => ['id' => 122, 'name' => 'Taylor']],
        ['developer' => ['id' => 211, 'name' => 'Abigail']],
    ];

    $names = array_pluck($array, 'developer.name', 'developer.id');
    return $names;
});

//Array prepend & array pull
Route::get('arrprep', function(){
    // $array = ['one', 'two', 'three', 'four'];
    // $arrprepend = array_prepend($array, 'satu');
    // return $arrprepend;

    // $array = ['price' => 100];
    // $array = array_prepend($array, 'Desk', 'name');
    // return $array;

    $arrpull = ['name' => 'Desk', 'price' => 100];
    $namepull = array_pull($arrpull, 'name');
    return $arrpull;
});

//Array random
Route::get('abcdef', function(){
    // $array = [1,2,3,4,5,6];
    // $random = array_random($array, 3);
    // return $random;

    // $array = ['Desk', 'Table', 'Chair'];
    // $sorted = array_sort($array);
    // return $sorted;

    $string = 'Laravel';
    $array = array_wrap($string);
    return $array;
});

Route::get('sendb', 'Mailcontroller@basic_email');
Route::get('sendht', 'Mailcontroller@html_email');
Route::get('sendat', 'Mailcontroller@attachment_email');

Route::get('tasklist', function() {
    $tasks = Task::all();
    foreach ($tasks as $task){
        echo $task->task;
        echo "<br>" ;
    }
});
Route::get('gh', function (){
    $flights = Flight::where('name', 'sas')
        ->orderBy('created_at', 'asc')
        ->take(10)
        ->get();
    return $flights;
});

Route::get('test', function(){
    $flights = Flight::where('category', 1)->first();
    $flights->name = 'sasa';
    $flights->refresh();
    return $flights->name;
    // // $flights = Flight::all();
    // // $flights = $flights->reject(function ($flights) {
    // // return $flights->cancelled;
    // });
});

Route::get('test2', function(){
    $flight = Flight::find([1, 2, 3]); //find by primary key
    //$flight = Flight::where('category', 2)->first(); //find the first model that match the query constraints
    $count = Flight::where('category', 2)->count();
    $max = Flight::where('category', 1)->max('id');
    // return $flight;
    return $max;
    // return $count;
});
//insert
Route::get('insert', 'super@insertform');
Route::post('/create', 'super@insert');

//retrieve
Route::get('display', 'super@index');

//update
Route::get('edit', 'super@editinit')->name('edit');
Route::get('edit/{id}', 'super@show');
Route::post('edit/{id}', 'super@edit');

//delete
Route::get('delete/{id}', 'super@delete');

//firstOrCreate
Route::get('foc', 'super@try');

//delete2 test
Route::get('ggwp', 'super@delete2');

Route::get('restore', 'super@restore')->name('restore');