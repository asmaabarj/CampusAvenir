<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

@include('components.navbar')
@include('components.Alert')

<main>
<section class="py-10 bg-gray-50 mt-16 sm:py-16 lg:py-24">
    <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Questions & Reponses</h2>
            <p class="max-w-2xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Explorez notre FAQ complète pour trouver des réponses à vos questions les plus courantes.</p>
        </div>

        <div class="grid grid-cols-1 mt-12 md:mt-20 md:grid-cols-2 gap-y-16 gap-x-20">
            @foreach ($faqs as $faq)
            <div class="flex items-start">
                <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 bg-gray-200 shadow-md rounded-full">
                    <span class="text-lg font-semibold text-black">?</span>
                </div>
                <div class="ml-4">
                    <p class="text-xl font-semibold text-bacl">{{$faq->question}}</p>
                    <p class="mt-4 text-base text-gray-700">{{$faq->reponse}}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center mt-12 md:mt-20">
            <div class="px-8 py-4 text-center bg-gray-100 shadow-md rounded-full">
                <p class="text-gray-800">Vous n'avez pas trouvé la réponse que vous cherchez ? <a href="#" title="" class="text-blue-400  transition-all duration-200 hover:text-blue-500 focus:text-blue-500 hover:underline">Contactez notre support</a></p>
            </div>
        </div>
    </div>
</section>

</main>
@include('components.Footer')

</html>
