<?php
session_start();
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
} else {
    session_destroy();
    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/2370d802c3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.style.css">
</head>


<body id="body">
    <nav class="navbar">
        <div class="container-fluid">
            <span><a class="navbar-brand" href="./home.php">Crud BloGs</a></span>
            <div class="nav-item">
                <p class="create-blog-icon"><a href="./createBlog.php"><i class="fa-solid fa-pencil"></i>Create</a></p>
                <p class="profile"><a href="./profile.php"><i class="fa-solid fa-user"></i><?php echo $_SESSION["user"] ?></a></p>
                <p class="logout"><i class="fa-solid fa-arrow-right-to-bracket"></i>Logout</p>
            </div>
        </div>
    </nav>