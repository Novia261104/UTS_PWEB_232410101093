<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Chuu Florist</title>
</head>
<body class='bg-purple-100 min-h-screen flex flex-col'>
    <x-navbar />
    <div class="w-full flex-grow">
        @yield('content')
    </div>
    <x-footer />
</body>
</html>
