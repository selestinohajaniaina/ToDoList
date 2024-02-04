<?php
include("../db.php");

$id = $_POST["id"];

$delete = "DELETE FROM todo WHERE id={$id}";
if(mysqli_query($db, $delete) == 1){
    echo 1;
}else{
    echo 0;
}