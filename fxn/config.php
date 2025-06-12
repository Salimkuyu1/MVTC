<?php

$username = "root";
$database = "MVTC";
$password = "";
$host = "localhost";

try{
// Database connection should always be in a try catch method.
    $dtb = new PDO("mysql:host=" .$host. ";dbname=". $database, $username, $password);

}catch(PDOException $e){
    echo $e->getmessage();
}