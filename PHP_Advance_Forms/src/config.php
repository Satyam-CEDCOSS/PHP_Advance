<?php
session_start();
$_SESSION["currency"]=array(
    "Rupee"=>"1",
    "Ruble"=>"1",
    "Dollar"=>"81.86",
    "Euro"=>"90.6"
);
$first = $_POST["first"];
$second = $_POST["second"];
// print_r($first);
// print_r($second);
// print_r($_SESSION["currency"])
$value = $_SESSION["currency"][$first]/$_SESSION["currency"][$second];
print_r($value);
?>