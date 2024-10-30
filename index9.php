<?php

    // Numeric array
    $names=[
        "Paing Thet Ko",
        "Kyaw Kyaw",
        "Aung Aung"
    ];

    foreach ($names as $key=>$name){
        echo $key." - ".$name, " ";
    }
    die(var_dump($names));

    // Associated Array
    $personBio=[
        "name"=> "Paing Thet Ko",
        "age" => 22,
        "isMarried" => true
    ];

    foreach($personBio as $key=>$feature){
        echo $key." - ".$feature," ";
    }

