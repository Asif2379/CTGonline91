<?php
$start = 1;
$send = 4;


$sum = 0;

for($i = $start; $i <= $send; $i++){
    $sum += $i;
    if($i!=$send){
    	echo $i."+";
    }else{
    	echo $i."=";
    }
}

echo $sum;
?>