<?php
require "vendor/autoload.php";

function countAll($arg1){
    if(func_num_args() == 0){
        exit("You must specify at least one parameter");
    } else {
        $args = func_get_args();
    }

    ladybug_dump($args);

    array_shift($args);
    ladybug_dump($args);

    ladybug_dump($arg1);

}


countAll('a', 'b', 'c');