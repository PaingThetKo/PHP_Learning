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


    // Associated Array
    $personBio=[
        "name"=> "Paing Thet Ko",
        "age" => 22,
        "isMarried" => false
    ];

    foreach($personBio as $key=>$feature){
        echo $key." - ".$feature," ";
    }

