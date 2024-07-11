<?php
    $values = array(10, 9, 8, 7, 5);
    var_dump($values);

    $names = ["Ida", "laela"];
    var_dump($names);

    var_dump($names[0]);

// change data
    $names[0] = "Budi";
    var_dump($names);

// delete data
    unset($names[1]);
    var_dump($names);

// add data array
    $names[] = "Bono";
    var_dump($names);   
    
// count data in array
    var_dump(count($names));

// code creates a map and array within array
    $ida = array(
        "id" => "ida",
        "name" => "Ida laela",
        "age" =>17,
        "address" => [
            "city" => "Jakarta",
            "country" => "Indonesia"
        ]
    );
    
    var_dump($ida);

    var_dump($ida["name"]);
    var_dump($ida["address"]["country"]);
    //example 2
    $jamal =[
        "id" => "jamal", 
        "name" => "jamal ahmad",
        "age" => 20,
        "address" => [
            "city" => "Bandung",
            "country" => "Indonesia"
        ]
    ];
    var_dump($jamal);
?>