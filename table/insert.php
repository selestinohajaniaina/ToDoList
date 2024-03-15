<?php
include("../db.php");

$col = $_POST["col"];
$row = $_POST["row"];
$colspan = $_POST["colspan"];
$rowspan = $_POST["rowspan"];

$delete = "DELETE FROM contenu WHERE tab_col={$col} AND tab_row={$row}";
mysqli_query($db, $delete);

$insert = "INSERT INTO contenu(tab_col, tab_row, tab_colspan, tab_rowspan) VALUES ({$col}, {$row}, {$colspan}, {$rowspan})";

if(mysqli_query($db, $insert) == 1){
    echo 1;
}else{
    echo 0;
}

echo $col.' '.$row.' '.$colspan.' '.$rowspan;