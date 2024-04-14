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

<main>
<div class="bg-gray-100 p-8 mt-16 font-[sans-serif] ">
    <div class="bg-white rounded-lg shadow w-[85%] mx-auto">
        <div class="p-6 border-b border-gray-300">
            <h2 class="text-3xl font-extrabold text-blue-800">Questions fréquentes</h2>
            <p class="text-gray-600 mt-4 text-sm">Explorez notre FAQ complète pour trouver des réponses à vos questions les plus courantes.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1  gap-8 p-6 ">
            @foreach ($faqs as $faq)
            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">{{$faq->question}}</h3>
                <p class="text-gray-600 text-sm">{{$faq->reponse}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
</main>
@include('components.Footer')

</html>
