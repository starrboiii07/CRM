<!DOCTYPE html>
<html lang="en" class="@if(session('theme', 'light') === 'dark') dark @endif">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRM Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-gray-50 dark:bg-dark-800 text-gray-800 dark:text-gray-200 transition-colors duration-200">
    @yield('content')
    @stack('scripts')
</body>
</html>
