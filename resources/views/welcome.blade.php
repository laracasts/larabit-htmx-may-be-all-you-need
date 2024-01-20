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
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    </head>
    <body class="antialiased bg-slate-700">
        <div class="flex justify-center px-10 py-10 w-full">
            <div class="flex w-1/2 space-x-4 justify-center">
                <button 
                    hx-get="/hello-world"
                    hx-target="#content"
                    class="bg-indigo-600 text-white p-4 text-lg font-semibold rounded-md">
                    Load Content
                </button>
            </div>
        </div>
        <div id="content" class="flex justify-center text-white"></div>
    </body>
</html>
