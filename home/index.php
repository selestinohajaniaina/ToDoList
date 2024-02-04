<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src='../js/jquery.min.js'></script>
</head>
<body>

<?php require('../nav/navbar.php') ?>



<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Write your plan here and check it</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm p-4 rounded-md border">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Text ...</label>
                    <div class="mt-2 flex">
                      <input id="text" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      <input type="time" name="time" id="time" title="Choisir l'heure du debut" class="block rounded-md border-0 py-1.5 ml-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="button" id='btn' class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Insert</button>
                </div>
                <span id='err' class='text-red-700 '></span>
            </form>
        </div>
</div>
    <div class='sm:mx-auto sm:w-full sm:max-w-sm mx-6'>
        <div class="conteneur"></div>
    </div>

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
      <div class="mt-2 flex">
      <textarea id="text" type="text" autocomplete="off" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 contenu" rows='1'></textarea>
      <input type="time" title="Choisir l'heure du debut" class="block rounded-md border-0 py-1.5 ml-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 contenuTime">
      </div>
    </div>
    <div class="flex">
      <input type="checkbox" name="fini" id="check">
    <label for="check" class="text-sm font-medium leading-6 text-gray-900 ml-2 cursor-pointer">Finished</label>
    </div>
    <input type='hidden' id='contenuId' value=''> 
	<div class="flex items-center mt-3">
	  <button id='canceled' class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
		Cancel
	  </button>

    <button id='modified' class="flex-1 px-4 py-2 ml-2 bg-gray-300 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
		Modify
	  </button>

	  <button id='deleted' class="flex-1 px-4 py-2 ml-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md">
		Delete
	  </button>
	</div>
  </div>
</div>


    <script src='../js/script.js' defer></script>


</body>
</html>