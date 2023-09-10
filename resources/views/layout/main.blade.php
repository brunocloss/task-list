<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>

<body>

    <h1 class="text-center text-[2rem] mt-5">
        @yield('title') 
    </h1>
    <div class="container mx-auto mt-5 mb-10 max-w-lg">
        <div class="flex flex-col justify-center text-center">
            @yield('content')
        </div>
    </div>


</body>

</html>
