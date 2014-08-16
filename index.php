<?php
/**
 * Created by PhpStorm.
 * User: tanub
 * Date: 8/13/14
 * Time: 11:25 PM
 */

class NameException extends Exception { }
class EmailException extends Exception { }

$name = "";
$email= "";

try {
    if (empty($name)) {
        throw new NameException();
    }
    elseif (empty($email)) {
        throw new EmailException();
    }
    else {
        echo "Name is " . $name . "<br>";
        echo "Email is " . $email;
    }
}
catch (NameException $n) {
    echo "A name was not provided.";
    error_log($n->getTraceAsString());
}
catch (EmailException $e) {
    echo "An email address was not provided.";
    error_log($e->getTraceAsString());
}