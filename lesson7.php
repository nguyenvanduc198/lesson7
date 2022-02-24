<?php
// echo 123;

// $arr=[1,2,3];

// echo '<pre>' . var_export($arr, true) . '</pre>';
$a = array(1, 2, 3);
function sum($a)
{
    $result = 0;
    foreach ($a as $key) {
        $result += $key * $key;
    }
    return $result;
}
echo sum($a);



