<?php
include("../db.php");

$texte = $_POST["texte"];
$times = $_POST["times"];

$insert = "INSERT INTO todo(texte, times, finish) VALUES('{$texte}', '{$times}', 0)";
if(mysqli_query($db, $insert) == 1){
    echo 1;
}else{
    echo 0;
}