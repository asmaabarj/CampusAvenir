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
            <h2 class="text-3xl font-extrabold text-indigo-800">Frequently Asked Questions</h2>
            <p class="text-gray-600 mt-4 text-sm">Explore our comprehensive FAQ to find answers to common queries.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1  gap-8 p-6 ">
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">How can I create an account?</h3>
                <p class="text-gray-600 text-sm">Creating an account is easy! Click on the "Sign Up" button and follow
                    the simple steps to get started.</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">Is there a mobile app available?</h3>
                <p class="text-gray-600 text-sm">Yes, we offer a mobile app for both iOS and Android. Visit the App
                    Store or Google Play to download it.</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">How can I reset my password?</h3>
                <p class="text-gray-600 text-sm">To reset your password, go to the login page and click on the "Forgot
                    Password" link. Follow the instructions sent to your email.</p>
            </div>
        </div>
    </div>
</div>
</main>
@include('components.Footer')

</html>
