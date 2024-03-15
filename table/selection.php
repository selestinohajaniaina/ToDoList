<?php
include("../db.php");

$select = "SELECT * FROM `contenu`";
$query_selection = mysqli_query($db, $select);
$affiche  = '<table>';
    if(mysqli_num_rows($query_selection) > 0){
        while($ligne = mysqli_fetch_assoc($query_selection)){
            $affiche .= "<tr>
                            <td>" . $ligne['con_id'] . "</td>
                        </tr>";
        }
    }
$affiche  .= '</table>';
echo($affiche);