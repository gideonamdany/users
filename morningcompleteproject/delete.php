<?php
//check if the delete utton has been delete<?php
if(isset ($_GET["u_id"])){
    //now receive id from url
    $userid = $_GET["u_id"];
//connect to the database to delete
    require_once "db_connection.php";
    //creata a delete quary
    $deleteQuery ="DELETE FROM `users` WHERE id='$userid'";
    //finally delete using the mysgl quary()
    $delete =mysqli_query($connection,$deleteQuery);
    //check if the delete was successful
    if(isset($delete)){
        //redirect the user back  to your user.php file
        header("location:users.php");
    }else{
        echo "deleted failed";
    }
}
