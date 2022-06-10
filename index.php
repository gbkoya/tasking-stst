<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
npx
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<link rel="stylesheet" href="index.css">

<body class="text-center">
    <ma in class="class-assign">

    <h1>Tasks Assigned</h1><br>
    <div> <button type="button" class="btn btn-primary" href="http://www.google.com"> Urgent</button> </div> <br>
    <div><button type="button" class="btn btn-primary">Important</button> </div> <br>
    <div><button type="button" class="btn btn-primary">Less Urgent</button> </div> <br>

    <a href="logout.php">Logout</a>
  
   
</body>

</html>