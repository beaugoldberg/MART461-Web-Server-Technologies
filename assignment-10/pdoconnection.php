<?php

$host = 'localhost'; 
$db = 'esports';
$user = 'newuser';
$pass = 'test123!!';
$dsn = "mysql:host=$host;dbname=$db";

$cn=new PDO($dsn, $user, $pass);

?>