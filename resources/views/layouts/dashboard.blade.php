<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Library | {{ $title ?? 'Dashboard' }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.1/css/all.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.1/css/sharp-thin.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.1/css/sharp-solid.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.1/css/sharp-regular.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.0.1/css/sharp-light.css" />
</head>
<body class="h-full">
    <div class="flex min-h-screen bg-gray-100">
        @include('partials.dashboard.sidebar')

        <div class="flex min-w-0 flex-1 flex-col">
            @include('partials.dashboard.topbar')

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
