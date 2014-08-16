<?php
require "vendor/autoload.php";

$a = new stdClass();
$a->pro = 11;
ladybug_dump($a);

function hello(){
    ladybug_dump($a);
    $b = "temp b";
}

hello();

ladybug_dump($a);
