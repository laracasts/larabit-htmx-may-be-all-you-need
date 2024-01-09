<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larabits: HTMX</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased bg-slate-700">
        <div id="search-form" class="flex justify-center px-10 py-10 w-full">
            <div class="flex w-1/2 space-x-4">
                <div class="flex w-full ">
                    <input 
                        type="text" 
                        name="search-term"
                        class="w-full rounded-md me-2" 
                    />
                    <button 
                        class="bg-indigo-600 text-white px-6 text-lg font-semibold py-4 rounded-md"
                    >Search</button>
                </div>
            </div>
        </div>
        <div id="search-results"></div>
    </body>
</html>
