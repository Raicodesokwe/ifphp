<?php

$salary=10000;
if($salary<=10000){
    $House=$salary*20/100;
    $general=$salary*60/100;
   echo  $gross=$salary+$House+$general;
}
elseif($salary<=20000){
    $House=$salary*0.25;
    $general=$salary*0.65;
    $gross=$House+$salary+$general;
}
elseif($salary<=30000){
    $House=$salary*0.30;
    $general=$salary*0.70;
    $gross=$House+$salary+$general;
}
elseif($salary<=40000){
    $House=$salary*0.35;
    $general=$salary*0.80;
    $gross=$House+$salary+$general;
}
else{
    $House=$salary*0.40;
    $general=$salary*0.80;
    $gross=$House+$salary+$general;
}
echo "your gross salary is $gross";
?>