<?php

// $person = ["Kyaw Kyaw", 20, "Black"];

$person = [
    "name" => "Kyaw Kyaw",
    "age" => 20,
    "hair" => "Black"
];

foreach($person as $key=>$appearance){
    echo $key." is ".$appearance.", ";
}
// require "index7.view.php";