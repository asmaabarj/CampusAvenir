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
    <div class=" px-64  mx-auto mt-32 sm:rounded-lg">
        <div class="flex items-center justify-between bg-white ">
            <table id="datatable"  class="w-full p-4 shadow-md text-sm text-left  text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th class="px-6 text-left py-3 ">
                            Concours
                        </th>
                        <th class="px-6  text-left py-3">
                            Établissement
                        </th>
                        <th class="px-6  text-left py-3">
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
                            <td class="px-6 text-left py-4">
                                {{ $concour->titre }}
                            </td>

                            <td class="px-6 text-left py-4">
                                {{ $concour->etablissment->nom }}
                            </td>
                            <td class="px-6 text-left py-4">
                                {{ $concour->date }}
                            </td>
                            <td class="py-4 pr-10  flex justify-end">
                                <a href="{{ asset('storage/' . $concour->pdf) }}" download>
                                    <img src='{{ asset('storage/images/pdf.png') }}' class="w-16 cursor-pointer h-16">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
</body>
<script src="{{asset('js/datatable.js')}}"></script>
    
</html>