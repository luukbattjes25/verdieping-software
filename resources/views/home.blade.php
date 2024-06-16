<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>

<body class="h-screen w-screen overflow-hidden">
    <div id="app" class="h-screen w-screen bg-red-300 flex overflow-hidden">

        {{-- sidebar --}}
        <div class="bg-green-300 flex flex-col w-96 overflow-auto">
            <h1 class="p-3 bg-gray-300 font-extrabold text-center">Todo-Website</h1>
            <ul class="flex flex-col">
                <x-nav-link>todos</x-nav-link>
                <x-nav-link>completed</x-nav-link>
                <x-nav-link>completed</x-nav-link>
                <x-nav-link>completed</x-nav-link>
            </ul>
        </div>

        {{-- main --}}
        <div class="bg-orange-300 flex w-full overflow-auto justify-center">
            <div>
                <div>
                    <h1 class="text-center">heading</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
