<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<main>
<div class="flex justify-center  h-screen items-center">
    @if (session('error'))
    <div id="error-message"
        class="fixed inset-0 px-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
        <div class="w-full max-w-md bg-white shadow-lg rounded-md px-5 py-10 relative mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 fill-red-500 absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2" viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="15" fill="#FFFFFF" />
                <path 
                    d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                    fill="#E70E0E" />
            </svg>
            
            <div class="mt-8">
                <h3 class="text-2xl font-semibold flex-1">Oops!</h3>
                <p class="text-sm text-gray-500 mt-2">{{ session('error') }}</p>
                <button type="submit"
                    class="px-5 py-2.5 mt-8 w-full rounded text-white text-sm font-semibold border-none outline-none bg-red-500 hover:bg-red-600">Compris</button>
            </div>
        </div>
    </div>
    
    <script>
        setTimeout(function () {
            document.getElementById('error-message').style.display = 'none';
        }, 2000);
    </script>
    @endif
    
    <form action="/login" method="POST" class="flex lg:w-[30%] w-96 mx-auto flex-col space-y-5 rounded-lg border py-10 px-5 bg-[#F9F9F9] shadow-xl">
        @csrf
        <div class="mx-auto mb-2 space-y-3">
            <h1 class=" text-2xl font-bold text-gray-700">Connexion pour débloquer votre potentiel</h1>
            <p class="text-gray-500">Nouvel utilisateur ? <span class="text-blue-500"><a href="/register"><u>Inscrivez-vous</u></a> </span> </p>
        </div>
        <div class="grid  gap-5">
            <div class="relative mt-2 w-full">
                <input type="email" name="email" value=""
                    class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" " />
                <label for="email"
                    class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                    Email </label>
                    <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                        @error('email')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="relative mt-2 w-full">
                <input type="password" name="password"
                    class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" " />
                <label for="password"
                    class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                    Mot de passe</label>
                    <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                        @error('password')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
            </div>    
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" value="{{ True }}" name="remember_me"  class="text-blue-600 cursor-pointer">
                    <label for="remember_me" class="ml-2 text-gray-500">Se souvenir</label>
                </div>
                <div>
                    <a href="/forgetPassword" class="text-blue-600 hover:underline">Mot de passe oublié?</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center ">
            <div class="flex gap-2 justify-center items-center">
                <i class='text-blue-600 bx bxs-lock'></i>
                <h1>Vos données sont sécurisées avec nous</h1>
            </div>
            <button type="submit" class="rounded-lg bg-blue-600 mt-6 py-3 max-w-[150px] px-6 font-meduim text-white">Se Connecter</button>
        </div>
    </form>
</div>
</main>
@include('components.FooterAuth')
</body>
