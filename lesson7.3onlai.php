<?php

$name = "Tuan";
function getName($age) {
    global $name ;
    echo $name;
    echo $age;
}
getName(12);

?>


