<?php
include("./connection.php");
if(isset($_POST["register"])){
    $username = pg_escape_literal($_POST["name"]);
    $phone = pg_escape_literal($_POST["mobile"]);
    $email = pg_escape_literal($_POST["email"]);
    $pass = pg_escape_literal($_POST["pass"]);
    $securePass = hash("sha512", $pass);
}else{
    die("something went wrong");
}

// checking for the existing username
$selectQuery = "SELECT username, phone, email, password
FROM \"userCred\" WHERE username = {$username}";

$result = pg_query($selectQuery);
$row = pg_fetch_assoc($result);

if(!$row){
    echo"no record found";
    unset($result);
    $insertQuery = "INSERT INTO \"userCred\"(
        username, phone, email, password)
        VALUES ({$username}, {$phone}, {$email}, '{$securePass}')";
    $result = pg_query($insertQuery);

    if($result){
        header("location: ../index.php");
    }
}else{
    header("location: ../index.php");
};

