<?php
//check if the button has been clicked
if (isset($_GET["u_id"])){
    //receive the value from url
    $receivedId = $_GET["u_id"];
    $receivedName = $_GET["u_name"];
    $receivedEmail = $_GET["u_email"];
    $receivedPassword = $_GET["u_password"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <script src="asset/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="asset/bootstrap/js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
</head>
<body>
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-centre">update users</h1>

            <form method="post" action="update_handle.php">
<!--                <input name="text">-->
                <input type="hidden" value="<?php echo $receivedId;?>" name="u_id" class="form-control" >

                <input value="<?php echo $receivedName;?>" name="u_name" class="form-control" placeholder="enter name" type="text"><br><br>
                <input value="<?php echo $receivedEmail;?>"name="u_email" class="form-control" placeholder="enter email" type="email"><br><br>
                <input  value="<?php echo $receivedPassword;?>"name="u_password" class="form-control" placeholder ="enter password" type="password"><br><br>
                <input  class="btn btn-outline-info btn-block" value="update" name="btn_update" type="submit"><br><br>
                <a class="btn btn-outline-success btn-block" href="users.php">Back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

</section>
</body>
</html>
