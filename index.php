<?php
/**
 * Created by PhpStorm.
 * User: tanub
 * Date: 8/13/14
 * Time: 11:25 PM
 */

function handleError($errno, $errstr,$error_file,$error_line)
{
    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    echo "<br />";
    echo "Terminating PHP Script";
    die();
}

set_error_handler("handleError");

echo $asd;

//$a = new stdClass();
//echo $a->asd();
