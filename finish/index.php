<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finished</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src='../js/jquery.min.js'></script>
</head>
<body>

<?php require('../nav/navbar.php') ?>
<div class="mt-10">__</div>
<div class='sm:mx-auto sm:w-full sm:max-w-sm mx-6 mt-10'>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Your plan that finished</h2>
        </div>
        <div class="conteneur mt-10"></div>
</div>

<script>
    $.get('selection.php', function(e) {
        $('.conteneur').html(e);
    })
</script>

</body>
</html>