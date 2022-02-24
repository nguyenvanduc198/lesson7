<?php
$input = [1,2,3,4,5,6];
function sumSquare($arr){
    $result = 0;
    foreach($arr as $item){
        $result += $item*$item;

    };
    return $result;
}
echo sumSquare($input);



?>