<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'airline-database';

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname) or die("Connection Unsuccessful");

?>
