<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src='../js/jquery.min.js'></script>
</head>
<body>

<?php require('../nav/navbar.php') ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Find your favorite activity here</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm p-4 rounded-md border">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="select" class="block text-sm font-medium leading-6 text-gray-900">Find by:</label>
                    <div class="mt-2 flex">
                        <select name="selesct" id="select" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="date">date</option>
                            <option value="texte">text</option>
                            <option value="times">times</option>
                            <option value="finish">finish</option>
                        </select>
                    </div>
                    <label for="radio" class="block text-sm font-medium leading-6 text-gray-900">Order by:</label>
                    <div class="mt-2 flex justify-between">
                        <div class='flex'>
                            <input type="radio" id='asc' name="ordre" value='ASC'>
                            <label for="asc" class="block text-sm font-medium leading-6 text-gray-900 ml-2">ASC</label>
                        </div>
                        <div class='flex'>
                            <input type="radio" id='desc' name="ordre" value='DESC'>
                            <label for="desc" class="block text-sm font-medium leading-6 text-gray-900 ml-2">DESC</label>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" id='btn' class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Search</button>
                </div>
                <span id='err' class='text-red-700 '></span>
            </form>
        </div>
</div>

<div class='sm:mx-auto sm:w-full sm:max-w-sm mx-6'>
        <div class="conteneur"></div>
    </div>

<!-- <script src="script.js" defer></script> -->
<?php require('script.php')?>

</body>
</html>