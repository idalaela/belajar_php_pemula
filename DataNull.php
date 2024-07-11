<?php
    $name = "Ida"; 
    $name = NULL;

    $age = null;

    echo "Name : ";
    echo $name;
    echo "\n";

    echo "Age : ";
    echo $age;
    echo "\n";

    echo "Is Name Null? : ";
    var_dump(is_null($name));
    echo "\n";

    $example = "Ida";
    unset($example);

    $example = "Laela";
    $example = "null";

    var_dump(isset($example));
?>