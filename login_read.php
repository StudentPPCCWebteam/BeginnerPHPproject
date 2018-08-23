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

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if ($connection) {
        echo 'we connected';
    } else {
        die('Database connection fail');
    }
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }



?>




<div class="container">
    <div class="col-xs-6">
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <pre>
    <?php
        print_r($row);
    ?>
        </pre>
    <?php
        }
    ?>

    </div>
</div>
</body>
</html>
