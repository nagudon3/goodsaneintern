<?php 
    $array = array_add(['name' => 'desk'], 'price', 100, ['place' => 'Cuking']);
    $array = implode('',$array);
    echo $array;

    $arcol = array_collapse([[1,2,3], [4,5,6], [7,8,9]]);
    $arcol = implode('',$arcol);
    echo "<br>". $arcol. "<br>";

    // [$a, $b] = array_divide(['name' => 'Desk']);
    // $a = implode('', $a);
    // $b = implode('', $b);
    // echo [$a, $b];

    // $flattened = array_dot($array);
    // echo $flattened;

    $first = [100, 200, 300];

    $firstly = array_first($first, function ($value, $key) {
        return $value >= 150;
    });
    $first = implode('', $first);
    echo $first. "<br>";
    echo $firstly;

    $ab = ['products' => ['desk' => ['price' => 100 ]]];
    echo "<br>Product = " . array_forget($ab, 'products.desk') . "<br />";
    // $ac = array_get($ab, 'products.desk.price');
    // $ac = implode ('', $ac);
    // echo $ac;

    // $arrays = ['name' => 'Desk', 'price' => 100, 'orders' => 10];
    // $arrays = implode('',$arrays);
    // $slice = array_only($arrays, ['name', 'price']);
    // echo $slice;

    // $arrpull = ['name' => 'Desk', 'price' => 100];
    // $arrpull = implode("", $arrpull);
    // $namepull = array_pull($arrpull, 'name');
        
    // echo $namepull;
    // echo $arrpull;

    echo $path=app_path() . "<br />";
    echo $path = app_path('Http/Controllers/Controller.php'). "<br />";

    echo $path = base_path(). "<br />";
    echo $path = base_path('vendor/bin') . "<br />";

    echo $path = config_path() ."<br />";
    echo $path = config_path('app.php') ."<br />";

    echo $path = database_path() ."<br />";
    echo $path = database_path('factories/UserFactory')."<br />";

    // echo $path = mix('css/app.css');

    echo $path = public_path()."<br />";
    echo $path = public_path('css/app.css')."<br />";

    echo $path = resource_path()."<br />";
    echo $path = resource_path('sass/app.scss')."<br />";

    echo $path = storage_path()."<br />";
    echo $path = storage_path('app/file.txt')."<br />";

    echo __('Welcome to our appliction')."<br />";
    echo __('message.welcome')."<br />";

    echo $converted = camel_case('Naz_rul')."<br />";

    echo $class = class_basename('Foo\Bar\Baz')."<br>";
    echo e('<html>foo</html>')."<br>";

    $result = ends_with('This is my name', 'name');
    echo $result."<br>";

    echo $a = kebab_case('nazRul')."<br>";

    $string = 'The event will take place between :start and :end';
    $replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);
    echo $replaced ."<br";

    $snake = snake_case('fooBar');
    echo $snake . "<br />";
?>