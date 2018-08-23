<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // don't need it now;
//    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
//    if ($connection) {
//        echo 'we connected';
//    } else {
//        die('Database connection fail');
//    }
    $query = " INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }


}


?>



<div class="container">
    <div class="col-xs-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>
