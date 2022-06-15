<?php
//checked if the button has been clicked
if (isset($_POST["btn_reg"])){
    //start receiving data from the form
    $name = $_POST["u-name"];
    $email = $_POST["u_email"];
    $pasword = $_POST["u-password"];
    //now proceed to connect tpo the database to save your data
    require_once "db_connection.php";
    //created the insert quary to save the data
    $insertquary ="INSERT INTO `users`(`id`, `jina`, `arafa`, `pasword`)
                        VALUES (null,'$name','$email','$pasword')";


    //finally save the data using mysqli_quary
    if (isset($connection)) {
        $save = mysqli_query($connection,$insertquary);
    }
    //checked if the saving was successful
    if (isset($save)){
        echo "user registration successful";

    }else{
        echo "user registration failed";
    }
}

