<?php
session_start();
include("./connection.php");
if(isset($_POST["create"])){
    $title = pg_escape_literal(htmlspecialchars($_POST["title"]));
    $content = pg_escape_literal(htmlspecialchars($_POST["content"]));
    $author = pg_escape_literal($_SESSION["user"]);
    $timeStamp = pg_escape_literal(date('Y-m-d H:i:s', time()));
    $edited = pg_escape_literal("false");
}else{
    die("something went wrong");
}
$insertCreateQ = "INSERT INTO \"blogData\"(
    title, content, author, \"time\", \"isEdited\")
    VALUES ({$title}, {$content}, {$author}, {$timeStamp}, {$edited})";
    $result = pg_query($insertCreateQ);
    if($result){
        header("location: ../home.php");
    }else{
    echo $result;
};
