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
@include('components.Alert')

<body class="bg-[#F7F8FA]">
    @include('layouts.sidebarAdmin')
    <section class="xl:w-[78%] mt-24 mb-8 lg:ml-auto grid grid-cols-1 lg:grid-cols-1  mx-6  gap-8 rounded-md ">
        <div class="bg-white rounded-md border flex flex-col items-center overflow-hidden">
            <div class="bg-blue-200 w-full h-28"></div>
            <img src="{{ asset('storage/' . $admin->photo) }}"
                 class="w-36 h-36 border-4 border-white rounded-full -mt-16 shadow-xl inline-block" />     
            <div class="p-4 text-center">
                <h4 class="text-base font-extrabold">{{$admin->nom}} {{$admin->prenom}}</h4>
                <p class="text-xs font-semibold mt-1">{{$admin->email}}</p>
                <p class="text-xs font-semibold mt-1">{{$admin->tele}}</p>
                <p class="mt-4">{{$admin->adresse}}</p>
            </div>
        </div>
        <div class="py-4 px-10 bg-white shadow-md rounded">
            <form action="{{ route('admin.updateProfile') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Prénom:</label>
                    <input type="text" name="prenom" value="{{ $admin->prenom }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                    <input type="text" name="nom" value="{{ $admin->nom }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" value="{{ $admin->email }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Téléphone:</label>
                    <input type="text" name="tele" value="{{ $admin->tele }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Adresse:</label>
                    <input type="text" name="adresse" value="{{ $admin->adresse }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo" id="fileInput"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-md focus:outline-none">
                        Enregistrer
                    </button>
                </div>
            </form>
            
        </div>
        
        <div class="py-4 px-10 bg-white shadow-md rounded">
            <form action="{{ route('user.updatePassword') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ancien mot de passe:</label>
                    <input type="password" name="oldpassword" class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nouvel mot de passe:</label>
                    <input type="password" name="newpassword" class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirmer mot de passe:</label>
                    <input type="password" name="confirmpassword" class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div class="mb-2">
                    <button type="submit" class="px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-md focus:outline-none">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
        
        </div>
    </section>
</body>

</html>
