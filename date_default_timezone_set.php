<?php
$tz = array("Pacific/HonoLulu",
            "America/New_York",
            "Europe/London",
            "Europe/Paris",
            "Asia/Taipei",
            "Asia/ToKyo"

);
foreach($tz as $v){
    date_default_timezone_set($v);
    $t = date("m月j日G時i分s秒");
    print "{$v}は{$t}です<br>";
}

?>