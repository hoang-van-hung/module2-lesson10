<?php
include_once "Dancer.php";
include_once "Pairing.php";

$MenDancer= new SplQueue();
$WomenDancer = new SplQueue();
$pair =new Pairing();

$manfirst = new Dancer("Quan" ,"Male");
$mansecond = new Dancer("Hoang" ,"Male");
$manthird = new Dancer("Lam" ,"Male");

$MenDancer->enqueue($manfirst);
$MenDancer->enqueue($mansecond);
$MenDancer->enqueue($manthird);

$womanfirst = new Dancer("Nguyet","Female");
$womansecond = new Dancer("Lam","Female");
$womanthird = new Dancer("Thanh","Female");
$womanfour = new Dancer("Tu","Female");

$WomenDancer->enqueue($womanfirst);
$WomenDancer->enqueue($womansecond);
$WomenDancer->enqueue($womanthird);
$WomenDancer->enqueue($womanfour);

echo "<pre>";
print_r($MenDancer);
print_r($WomenDancer);
print_r($pair->pairing($MenDancer, $WomenDancer));
print_r($pair->pairing($MenDancer, $WomenDancer));
print_r($pair->pairing($MenDancer, $WomenDancer));
print_r($pair->pairing($MenDancer, $WomenDancer));






//var_dump($MaleDancer);
