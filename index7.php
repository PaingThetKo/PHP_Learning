<?php

// $person = ["Kyaw Kyaw", 20, "Black"];

$person = [
    "name" => "Kyaw Kyaw",
    "age" => 20,
    "hair" => "Black"
];

$person["School"] = "OTS";

echo "<pre>";
print_r($person);

// die dumb
// dd ()

die (var_dump($person));

// die();

require "index7.view.php";