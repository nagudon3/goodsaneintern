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
?>