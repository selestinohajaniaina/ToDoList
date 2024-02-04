<?php
include("../db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$insert = "INSERT INTO user(username, passworde) VALUES('{$username}', '{$password}')";
if(mysqli_query($db, $insert) == 1){
    $select = "SELECT uuid FROM user WHERE username = '{$username}' AND passworde = '{$password}'";
    $query_selection = mysqli_query($db, $select);
    while($ligne = mysqli_fetch_assoc($query_selection)){
        echo($ligne['uuid']);
    }
}else{
    echo 0;
}