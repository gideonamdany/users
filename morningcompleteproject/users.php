<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="asset/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="asset/bootstrap/js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
</head>
<body>
<a class="btn btn-outline-secondary btn-block" href="register.php">add user</a>
<h1 class="text-info text-centre">All users</h1>
<table class="table table-hover table-dark">
    <tr>
        <th>name</th>
        <th>Email</th>
        <th>delete</th>
        <th>update</th>


    </tr>
    <?php

    //finally executed the update query by users of mysqli-query
    $host= "localhost";
    $user= "root";
    $password= "";
    $dbname = "muranga_db";


    $connection =mysqli_connect($host,$user,$password,$dbname);
    //connect to the database to fetch users
    require_once "db_connection.php";
    //prepare select quary to fetch the users
    $selectquary ="SELECT * FROM `users` WHERE 1";
    $users=mysqli_query($connection,$selectquary);
    //use a loop display all the users
    foreach ($users as $user){
         $name =$user["jina"];
         $Email =$user["arafa"];
         $password =$user["pasword"];
         $id   =$user["id"];
              echo "
            <tr>
                <td>$name</td>   
                <td>$Email</td>
                <td><a class='btn btn-danger' href='delete.php?u_id=$id'>delete</a></td>
                <td><a class='btn btn-info' href='update.php?u_id=$id&u_name=$name&u_email=$Email&u_password=$password'>update</a></td>
            </tr>";

    }
    ?>
</table>

</body>
</html>
