<?php
    $total = 0;

    $fruit = 5000;
    $chicken = 10000;
    $OrangeJuice = 5000;
// operator addition
    $total += $fruit;
    $total += $chicken;
    $total += $OrangeJuice;
    
    var_dump($total);
// operator subtraction
    $total -= $fruit;
    $total -= $chicken;
    $total -= $OrangeJuice;

    var_dump($total);
// operator multiplication
    $total *= $fruit;
    $total *= $chicken;
    $total *= $OrangeJuice ;

    var_dump($total). "<br>";
// operator distribution
    $total /= $fruit;
    $total /= $chicken;
    $total /= $OrangeJuice;

    var_dump($total);
// operator rank
    $total %= $fruit;
    $total %= $chicken;
    $total %= $OrangeJuice;

    var_dump($total);
    ?>