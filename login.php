<?php
include("./phpscripts/connection.php");
if(isset($_POST["login"])){
    if(empty($_POST["username"]) || empty($_POST["pass"])){
        echo "<script>
        window.location.href='./index.php';
        alert('All fields are required');
        </script>";
    }
    $userId = pg_escape_literal($_POST["username"]);
    $pass = $pass = pg_escape_literal($_POST["pass"]);
    echo $pass;
    $securePass = hash("sha512", $pass);
    $q = "SELECT username, phone, email, password
    FROM \"userCred\" WHERE username = {$userId} AND password = '$securePass'";
    echo $q;
    $result = pg_query($q);
    if(!$result){
        echo "something went wrong";
        die();
    }
    $row = pg_fetch_assoc($result);
    if($row){
        session_start();
        $_SESSION["user"] = $row["username"];
        header("location: ./home.php");
    }else{
        header("location: ./index.php");
    }
}else{
    header('location: ./index.php');
}