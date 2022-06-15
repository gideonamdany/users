<?php
//checked if the
if (isset($_POST["btn_update"])) {
    //received the update data from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $updatedEmail = $_POST["u_email"];
    $updatedPassword = $_POST["u_password"];


    //now connect to the  database
    require_once "db_connection.php";
    //create the update query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',`pasword`='$updatedPassword' WHERE id='$userId'";

    //finally executed the update query by users of mysqli-query
    $host= "localhost";
    $user= "root";
    $password= "";
    $dbname = "muranga_db";


    $connection =mysqli_connect($host,$user,$password,$dbname);

    $update = mysqli_query($connection, $updateQuery);

        //check if the update was successfully
        if (isset($update)){
            //redirect the user to users.php

            echo "Updated successfully";

            header("location:users.php");

        } else {
            echo "update failed";
        }
    }

