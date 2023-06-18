<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://kit.fontawesome.com/e5c96fca62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="antialiased flex flex-col ">
<div class="flex">
    <div class="w-14 min-h-screen bg-white">
      <!-- Sidebar content goes here -->
        <ul class="">
            <li class="mx-8">.</li>
            <li class="mx-8">.</li>
            <li class="mx-8">.</li>
        </ul>
    </div>
    <div class=" w-screen min-h-screen bg-violet-200">
          <!-- Main content goes here -->
        <div class="p-4">
            <div class="mt-7 ml-16 mb-3">
                <span class="text-lg font-bold">Pesanan Masuk</span>
            </div>
            <div class="">
                <div class="relative py-10 px-10 mx-5 w-[177vh] overflow-x-auto shadow-md bg-white h-[70vh] rounded-[20px]">
                    <table class="w-2/3 text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id Pesanan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Pesanan
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Menu
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border rounded-lg border-black ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    2141720089
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    6 Desember, 2022
                                </td>
                                <td class="px-6 py-4 justify-center">
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="mx-auto block text-white bg-violet-500 hover:bg-violet-600 focus:ring-4 focus:outline-none focus:ring-violet-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                        Detail Product
                                    </button>
                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6 overflow-auto">
                                                   <table >
                                                        <tr class="bg-white">
                                                            <td class="w-40 pl-1 pr-4 py-4">
                                                                <img src="{{asset('img/other/produk2.png')}}" alt="">
                                                            </td>
                                                            <td class="px-10 py-4 font-semibold dark:text-white">
                                                                <div class="text-gray-400">Product Name</div>
                                                                <div class="text-black">Sofa Ternyaman</div>
                                                            </td>
                                                            <td class="px-10 py-4 font-semibold dark:text-white">
                                                                <div class="text-gray-400">Jumlah</div>
                                                                <div class="text-black">4</div>
                                                            </td>
                                                            <td class="pl-10 py-4 font-semibold text-gray-900 dark:text-white">
                                                                <button data-modal-hide="defaultModal" type="button" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg w-32 text-sm px-5 py-2.5 text-center">Back</button>
                                                            </td>
                                                        </tr>
                                                   </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border border-black rounded-md">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    21417200890
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    11 Juni, 2022
                                </td>
                                <td class="px-6 py-4 justify-center">
                                    <button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" class="mx-auto block text-white bg-violet-500 hover:bg-violet-600 focus:ring-4 focus:outline-none focus:ring-violet-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                        Detail Product
                                    </button>
                                    <!-- Main modal -->
                                    <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6 overflow-auto">
                                                   <table >
                                                        <tr class="bg-white">
                                                            <td class="w-40 pl-1 pr-4 py-4">
                                                                <img src="{{asset('img/other/coffee.png')}}" alt="">
                                                            </td>
                                                            <td class="px-10 py-4 font-semibold dark:text-white">
                                                                <div class="text-gray-400">Product Name</div>
                                                                <div class="text-black">kopikap</div>
                                                            </td>
                                                            <td class="px-10 py-4 font-semibold dark:text-white">
                                                                <div class="text-gray-400">Jumlah</div>
                                                                <div class="text-black">4</div>
                                                            </td>
                                                            <td class="pl-10 py-4 font-semibold text-gray-900 dark:text-white">
                                                                <button data-modal-hide="defaultModal1" type="button" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-32 px-5 py-2.5 text-center">Back</button>
                                                            </td>
                                                        </tr>
                                                   </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>


