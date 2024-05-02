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
        <div class="flex justify-center my-20 h-screen items-center">

            <form action="{{ route('register') }}" method="POST"
                class="flex lg:w-[65%]  w-96 mx-auto flex-col space-y-5 rounded-lg border py-10 px-5 bg-[#F9F9F9] shadow-xl">
                @csrf
                <div class="mx-auto mb-2 space-y-3">
                    <h1 class=" text-2xl font-bold text-gray-700">Inscrivez-vous pour plonger</h1>
                    <p class="text-gray-500">Déjà utilisateur ? <span class="text-blue-500"><a
                                href="/login"><u>Connectez-vous</u></a> </span> </p>
                </div>
                <div class="grid lg:grid-cols-2 gap-5 gap-y-7">
                    <div class="relative mt-2 w-full">
                        <input type="text" name="prenom" id="prenom"
                            class="border-1 peer block w-full  bg-white appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder="" />
                        <label for=""
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Prénom </label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('prenom')
                                <div>{{ $message }}</div>
                            @enderror
                            <div id="errorMessage" class="hidden text-red-600 font-semibold ">
                                <p>Prénom n'est pas valide</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="text" id="nom"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " name="nom" />
                        <label for="name"
                            class="absolute top-2 left-1 z-10  origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Nom de famille </label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('nom')
                                <div>{{ $message }}</div>
                            @enderror
                            <div id="errorMessage1" class="hidden text-red-600 font-semibold ">
                                <p>Nom n'est pas valide</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="email" value="email@gmail.com" name="email" id="email"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="email"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Email </label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror
                            <div id="errorMessage2" class="hidden text-red-600 font-semibold ">
                                <p>E-mail n'est pas valide</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="text"  name="tele" id="tele"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="phone"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Téléphone </label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('tele')
                                <div>{{ $message }}</div>
                            @enderror
                            <div id="errorMessage3" class="hidden text-red-600 font-semibold ">
                                <p>numero de télephone n'est pas valide</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="text" name="adresse"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Adresse </label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('adresse')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="relative mt-2 w-full">
                        <input type="date" name="date_naissance"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Date de naissance</label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('date_naissance')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="text" name="niveau"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="Level"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Niveau</label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('niveau')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="relative mt-2 w-full">
                        <input type="text"  name="ecole"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="School"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            École</label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('ecole')
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
                    <div class="relative mt-2 w-full">
                        <input type="password" name="cpassword"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="cpassword"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Confirmer le mot de passe</label>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center ">
                    <div class="flex gap-2 justify-center items-center">
                        <i class='text-blue-600 bx bxs-lock'></i>
                        <h1>Vos données sont sécurisées avec nous</h1>
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-blue-600 mt-6 py-3 max-w-[120px] px-6 font-meduim text-white">S'inscrire</button>
                </div>
            </form>
        </div>
    </main>
    @include('components.FooterAuth')
    <script src="{{ asset('js/regexRegister.js') }}"></script>

</body>
