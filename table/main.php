<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/output.css">
    <script src="../js/jquery.min.js"></script> -->
    <style>
        input {
            outline: none;
        }
        .checked {
            background: red;
        }
    </style>
<!-- </head>
<body> -->

    <table class="conteneur m-2"></table>
    
    <input type="button" value="funsionner" class="border btn">
   

<script src="./script.js" defer></script>
<script>
    // selection du nombre du colonne et ligne
    $.get("nbr_tab.php", function (res) {
            console.log(res);

        }
    )

    // selection du contenu du colonne ou ligne
    $.get("selection.php", function (res) {
            // console.log(res);

        }
    )
</script>
<!-- </body>
</html> -->