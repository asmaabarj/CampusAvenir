<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-[#F7F8FA]">
    @include('layouts.sidebarAdmin')
    <section class="xl:w-[78%] mt-24 mb-8 lg:ml-auto grid grid-cols-1 lg:grid-cols-2  mx-6  gap-8 rounded-md ">
        <div class="py-4 px-10 bg-white shadow-md rounded">
            <form action="" method="" enctype="multipart/form-data" class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Prénom:</label>
                    <input type="text" name="name" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                    <input type="datetime" name="name" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Téléphone:</label>
                    <input type="text" name="phone" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>



                <div class="mb-2">

                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white rounded-md border flex flex-col items-center overflow-hidden">
            <div class="bg-blue-400 w-full h-40"></div>
            <img src="https://readymadeui.com/team-3.webp"
                class="w-36 h-36 border-4 border-white rounded-full -mt-16 shadow-xl inline-block" />
            <div class="p-4 text-center">
                <h4 class="text-base font-extrabold">Simon Konecki</h4>
                <p class="text-xs font-semibold mt-1">asmaabarj5@gmail.com</p>
                <p class="text-xs font-semibold mt-1">0697917522</p>
                <p class="mt-4">04 , Rue El oualidiya Rue elmajd Safi .Mprroco.</p>
            </div>
        </div>
        <div class="py-4 px-10 bg-white shadow-md rounded">
            <form action="" method="" enctype="multipart/form-data" class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ancien mot de passe:</label>
                    <input type="password" name="oldpassword" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nouvel mot de passe:</label>
                    <input type="password" name="password" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirmer mot de passe:</label>
                    <input type="password" name="cpassword" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div class="mb-2">

                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white flex justify-center items-center border-gray-200 border-[1px] py-5 rounded">
        <div
            class="bg-gray-50 text-center px-4 rounded w-80 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-400 border-dashed mx-auto font-[sans-serif]">
            <div class="py-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mb-2 fill-gray-600 inline-block"
                    viewBox="0 0 32 32">
                    <path
                        d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                        data-original="#000000" />
                    <path
                        d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                        data-original="#000000" />
                </svg>
                <h4 class="text-base font-semibold text-gray-600">Selecter une photo de profile</h4>
            </div>
            <hr class="w-full border-gray-400 my-2" />
            <div class="py-6">
                <input type="file" id='uploadFile1' class="hidden" />
                <label for="uploadFile1"
                    class="block px-6 py-2.5 rounded text-gray-600 text-sm tracking-wider font-semibold border-none outline-none bg-gray-200 hover:bg-gray-100">Browse
                    Files</label>
                <p class="text-xs text-gray-400 mt-4">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
            </div>
        </div>
    </div>
        </div>
    </section>
</body>

</html>
