<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];



    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to data base
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<link rel="stylesheet" href="signin.css">

<body class="text-center">

    <main class="form-signin">
        <div id="box">

            <form method="post">
                <img class="mb-4" src="download.jpg" alt="" width="72" height="57">
                <div class="h3 mb-3 fw-normal">Signup</div><br>

                <div class="form-floating">
                    <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Username</label><br>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label><br>
                </div>

                <input type="Submit" name="signup"><br>
                <a href="login.php"> login </a>

                <div>
                    <p class="mt-5 mb-3 text-muted">&copy;2022</p>
                </div>
        </div>
            </form>


</body>

</html>
