<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:adminlogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Javascript popper-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Admin Portal</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="adminportal.php">Administrator Home</a></li>

            <a href="logout.php" class="btn btn-danger">Logout</a>
            <hr>
        </ul>
    </nav>
</header>

<body>
    <div class="adminsection_1">
        <h1 class="img-text">WELCOME, THIS IS THE ADMIN PORTAL!</h1>
    </div>


    <aside>
        <ul>
            <li><a href="">VIEW EXISTING MEMBERS</a></li>
            <li><a href=""> </a>UPDATE EVENTS</li>
            <li><a href=""> </a>UPDATE CHURCH ANNOUNCEMENTS</li>
        </ul>
    </aside>

    
</body>