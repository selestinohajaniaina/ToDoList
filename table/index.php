<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/output.css">
    <script src="../js/jquery.min.js"></script>
    <!-- <style>
        .input {
            outline: none;
        }
    </style> -->
</head>
<body>
    
    <?php require('../nav/navbar.php') ?>

    <div class="flex justify-center font-bold outline-none" style='margin: 5% 0 0 0;'>
        <h1 class="">Dessinner votre tableau</h1>
    </div>
    <input type="button" value="+ row" class='row  hover:border-2 border-2 hover:border-blue-500 m-2 text-center py-2 px-4 bg-blue-200 cursor-pointer rounded-full'>
    <input type="button" value="+ col" class='col  hover:border-2 border-2 hover:border-blue-500 m-2 text-center py-2 px-4 bg-blue-200 cursor-pointer rounded-full'>
    
    <table class='table m-2 p-2' border='1'>
        
    </table>

    <input type="button" value="- row" class="delRow hover:border-2 border-2 hover:border-blue-500 m-2 text-center py-2 px-4 bg-blue-200 cursor-pointer rounded-full">
    <input type="button" value="- col" class="delCol hover:border-2 border-2 hover:border-blue-500 m-2 text-center py-2 px-4 bg-blue-200 cursor-pointer rounded-full">

    <div style='background: rgb(0, 0, 0, 0.5)' id='alert' class="w-full mx-auto fixed h-full top-0 right-0 flex justify-center items-center">
        <div class="flex flex-col p-5 rounded-lg shadow bg-white w-full md:w-1/3">
            <div class="flex flex-col items-center text-center">
            <div class="inline-block p-4 bg-yellow-50 rounded-full">
                <svg class="w-12 h-12 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z"/></svg>
            </div>
            <h2 class="mt-2 font-semibold text-gray-800">Notification for modification</h2>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed contenuDate"></p>
            </div>
        <div>
            <div class="mt-2">
                <label for="colspan">nombre de fusion du colonne:</label>
                <input type="number" id="colspan" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 contenu" />
            </div>
            <div class="mt-2">
                <label for="rowspan">nombre de fusion du ligne:</label>
                <input type="number" id="rowspan" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 contenu" />
            </div>
            </div>
            <div class="flex items-center mt-3">
                <button id='canceled' class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
                    Cancel
                </button>

                <button id='modified' class="flex-1 px-4 py-2 ml-2 bg-yellow-500 hover:bg-yellow-400 text-white text-sm font-medium rounded-md">
                    Modify
                </button>
            </div>
        </div>
    </div>

<script src="./main.js" defer></script>
<script defer>
    
</script>
</body>
</html>