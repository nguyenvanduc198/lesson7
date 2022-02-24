<?php

$iro = array("red","olive","yellow","green");

foreach($iro as $v ){
 print $v."<br>";
}
$sales = array("sun"=>10,"mon"=>20,"tue"=>30,"wed"=>40,
               "thu"=>50,"fri"=>60,"sat"=>70);
$sum = 0;

foreach($sales as $k =>$v){
    print "キ-が{$k}の要素の値は{$v}です<br>";
    $sum += $v;

}
print "すべての合計はは{$sum}です";
?>