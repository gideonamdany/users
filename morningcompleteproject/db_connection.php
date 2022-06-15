<?php
$host= "localhost";
$user= "root";
$password= "";
$dbname = "muranga_db";
//connection to the db

$connection =mysqli_connect($host,$user,$password,$dbname);
//check if the connection failed to stop any other further procces
if (!isset($connection)){
    die("db connection failed");
}

