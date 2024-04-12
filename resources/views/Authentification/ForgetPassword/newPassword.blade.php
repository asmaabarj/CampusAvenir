<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Mot de Passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main>
        <div class="flex justify-center h-screen items-center">
            <form action="/newPassword" method="POST" class="flex lg:w-[30%] w-96 mx-auto flex-col space-y-5 rounded-lg border py-10 px-5 bg-[#F9F9F9] shadow-xl">
                @csrf
                <div class="mx-auto mb-2 space-y-3">
                    <h1 class="text-2xl font-bold text-gray-700">Définir un nouveau mot de passe</h1>
                    <p class="text-gray-500">Entrez votre nouveau mot de passe.</p>
                </div>
                <div class="grid gap-5">
                    <div class="relative mt-2 w-full">
                        <input type="password" name="new_password"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " required />
                        <label for="new_password"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Nouveau Mot de Passe</label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('new_password')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="relative mt-2 w-full">
                        <input type="password" name="confirm_password"
                            class="border-1 peer bg-white block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                            placeholder=" " required />
                        <label for="confirm_password"
                            class="absolute top-2 left-1 z-10 origin-[0] -translate-y-4 scale-75 transform cursor-text select-none bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600">
                            Confirmez le mot de passe</label>
                        <div class="text-red-500 text-[14px] absolute py-4 -bottom-9 pl-2 w-full">
                            @error('confirm_password')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <button type="submit" class="rounded-lg bg-blue-600 mt-6 py-3 max-w-[150px] px-6 font-medium text-white">
                        Réinitialiser
                    </button>
                </div>
            </form>
        </div>
    </main>
    @include('components.FooterAuth')
</body>

</html>
