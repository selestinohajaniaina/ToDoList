<?php
include("../db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$select = "SELECT * FROM user WHERE username = '{$username}'";
$query_selection = mysqli_query($db, $select);

if(mysqli_num_rows($query_selection) > 0){

    while($ligne = mysqli_fetch_assoc($query_selection)){
        $new_pssw = $ligne['passworde'];
        $new_name = $ligne['username'];
        $uuid = $ligne['uuid'];
    }
    session_start();
    $session['uuid'] = 2;
    if ($password == $new_pssw) {
        $result = 1;
    } else {
        $result = 0;
    }

}else {
    $result = 0;
}

if($result == 1){
    echo 1;
}else{
    echo 0;
}