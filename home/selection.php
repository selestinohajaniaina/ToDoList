<?php
include("../db.php");
$affiche = "";

$selection = "SELECT * FROM todo";
$query_selection = mysqli_query($db, $selection);

if(mysqli_num_rows($query_selection) > 0){
    while($ligne = mysqli_fetch_assoc($query_selection)){
        $affiche .= "<div class='relative'> <button class='btnNom  text-left block w-full rounded-md border-0 p-2 my-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 cursor-pointer hover:bg-blue-300 focus:ring-indigo-600 focus:ring-4 focus:outline-none sm:text-sm sm:leading-6' data-texte='{$ligne['texte']}' data-times='{$ligne['times']}' data-id='{$ligne['id']}' data-date='{$ligne['date']}'><span class='px-2 mr-2 bg-blue-300'>{$ligne['times']}</span>{$ligne['texte']}  </button> <span class='absolute right-[2px] bottom-[2px] text-[8pt] text-gray-500'>{$ligne['date']}</span> </div>";
                    }
                }
                
                echo $affiche;
                
                // <td class='btnPrenom'>{$ligne['times']}</td>
                // <td>
//                             <button class='mod' data-id='{$ligne['id']}' data-nom='{$ligne['texte']}' data-prenom='{$ligne['times']}' >MODIFIFER</button>
//                             <button class='sup' data-id='{$ligne['id']}'>SUPPRIMER</button>
//                         </td>