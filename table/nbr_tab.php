<?php
include("../db.php");

$select = "SELECT * FROM `table` WHERE id=1";
$query_selection = mysqli_query($db, $select);


// var_dump(mysqli_fetch_assoc($query_selection)); // JSON_PRETTY_PRINT
echo( mysqli_fetch_assoc($query_selection)['ligne']);
echo (mysqli_fetch_assoc($query_selection)['colonne']);