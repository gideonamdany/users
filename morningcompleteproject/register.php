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
            <h1 class="text-info text-centre">register here</h1>

            <form method="post" action="registration_handler.php">
                <input name="u-name" class="form-control" placeholder="enter name" type="text"><br><br>
                <input name="u_email" class="form-control" placeholder="enter email" type="email"><br><br>
                <input  name="u-password" class="form-control" placeholder ="enter password" type="password"><br><br>
                <input  class="btn btn-outline info btn-block" value="Register" name="btn_reg" type="submit"><br><br>
                <a class="btn btn-outline-success btn block" href="users.php">back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

</section>
</body>
</html>
