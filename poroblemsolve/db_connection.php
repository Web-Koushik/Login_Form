<?php
$dbHost="127.0.0.1";
$dbUser="root";
$dbPass="";
$dbName="testingdatabase";
$conn= mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Connection Failed!!!");
}

?>