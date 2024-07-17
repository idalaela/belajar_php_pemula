<?php
$first = [
    "first_name" => "Ida"
];

$last = [
    "first_name" => "Ida",
    "last_name" => "Laela"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Ida",
    "last_name" => "Laela"
];

$b = [
    "last_name" => "Laela",
    "first_name" => "Ida"
];
// Equality
var_dump($a == $b);
// Identity
var_dump($a === $b);
// Union
var_dump($a + $b);
// Inequality
var_dump($a != $b);
// Inequality
var_dump($a <> $b);
// Nonidentity
var_dump($a !== $b);
?>