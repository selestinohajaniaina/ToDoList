<?php
include("../db.php");

$id = $_POST["id"];
$texte = $_POST["texte"];
$times = $_POST["times"];
$finish = $_POST["finish"];

$modify = "UPDATE todo SET texte='{$texte}', times='{$times}', finish='{$finish}' WHERE id={$id}";
if(mysqli_query($db, $modify) == 1){
    echo 1;
}else{
    echo $finish.'mm';
}