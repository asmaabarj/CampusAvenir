<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body>
    @include('components.navbar')
    @include('components.Alert')
    <section class="lg:flex ml-4 lg:ml-36 lg:w-[80%] w-full mt-36 mx-auto ">
        <div class="bg-blue-950 text-gray-200 p-4 rounded-b-[2px] w-full lg:w-[27%]">
            <h1 class="text-4xl lg:text-xl font-extrabold text-white mb-6 ">Préparation aux Concours Universitaires: Exemples et Corrections en PDF</h1>
            <p class="text-lg lg:text-base text-gray-200 mb-5 ">Commencez votre préparation aux concours universitaires {{ now()->year }} avec la correction des épreuves d'accès aux
                facultés diverses. Corrigé par nos enseignants spécialistes des concours, cet ensemble de ressources
                couvre une gamme de concours universitaires, vous permettant de vous entraîner de manière efficace pour
                réussir votre examen. Peu importe le domaine dans lequel vous aspirez à étudier, ces ressources sont
                conçues pour vous aider à vous familiariser avec les types de questions posées et à perfectionner vos
                compétences pour obtenir un score élevé. Préparez-vous de manière complète et efficace pour maximiser
                vos chances de succès dans votre concours universitaire de choix.</p>
        </div>
        <div class="lg:w-[73%]">
        <img img src='{{ asset('storage/images/concour.png') }}' class=" lg:h-[50vh] " alt="">
        <li class="ml-5 mt-8 font-semibold">Explorez votre potentiel avec nos ressources uniques: des concours blancs et des épreuves antérieures de concours universitaires, le tout accessible en PDF!</li>
    </div>
    </section>
    <section class="lg:w-[80%]  mb-10 mx-auto">
        <div class="lg:w-[71%] lg:-mt-56 lg:ml-auto border p-4  sm:rounded-lg">
            <div class="  bg-white ">
                <table id="datatable" class=" p-4 shadow-md text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th class="px-6 text-left mt py-3 ">
                                Concours
                            </th>
                            <th class="px-6 text-left py-3">
                                Établissement
                            </th>
                            <th class="px-6 text-left py-3">
                                Date
                            </th>
                            <th class="px-6 text-right py-3">
                                Télécharger
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($concours as $concour)
                            <tr class="bg-white border-b hover:bg-gray-50 ">
                                <td class="px-6 border-b text-left py-4">
                                    {{ $concour->titre }}
                                </td>
                                <td class="px-6  border-b text-left py-4">
                                    {{ $concour->etablissment->nom }}
                                </td>
                                <td class="px-6 border-b  text-left py-4">
                                    {{ $concour->date }}
                                </td>
                                <td class="py-4 pr-10 border-b  flex justify-end">
                                    <a href="{{ asset('storage/' . $concour->pdf) }}" download>
                                        <img src='{{ asset('storage/images/pdf.png') }}'
                                            class="w-16 cursor-pointer h-16">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/datatable.js') }}"></script>

</html>
