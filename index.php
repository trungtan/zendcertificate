<?php
ini_set("session.use_cookies",0);
ini_set("session.use_only_cookies",0);
ini_set("session.use_trans_sid",1); # Forgot this one!
session_start();

require "vendor/autoload.php";

$_SESSION['user_id'] = 3;

echo session_id(), "<br/>";
var_dump($_SESSION);
echo "<br/><br/>";
var_dump($_GET);