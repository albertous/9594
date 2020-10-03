<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.min.css">
    <title>
        {{ config('APP_NAME', 'laravel') }}
    </title>
</head>
<body class="bg-gray-100 bg-gradient-to-br md:bg-gradient-to-br" style="background: url('/img/shoe.jpg'); background-size: cover;">

    <header class="bg-white flex items-center justify-between shadow-xl">
        <div class="flex">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-20 h-20">
            <span class="flex items-center font-bold text-gray-900">Weez on <br> Wheels</span>
        </div>
        <div class="flex bg-green-600">
            @php
                
            @endphp
            <span class="bg-white flex items-center font-bold text-gray-900 pr-6">
                <a href="{{ Route::currentRouteName() == 'login'? route('register'):route('login') }}">
                    {{ Route::currentRouteName() == 'login'? 'Register':'Login'}}</a></span>
           <button class="text-white w-20 h-20 focus:outline-none"><i class="fa fa-bars w-10"></i></button>
        </div>
    </header>

    <div >
        @yield('content')
    </div>


    <div class="footer bottom-0 pb-0 inset-x-0 {{ Route::currentRouteName() == 'login'? 'absolute':'' }}">
        <footer class="bg-white text-center py-8 text-gray-900 font-bold text-xs shadow-md">
            <div class="">
                <span class="pr-4 font-bold text-gray-900">Condition of use</span>
                <span class="pr-4 font-bold text-gray-900">Privacy Policy</span>
                <span class="pr-4 font-bold text-gray-900">Disclaimer</span>
                <span class="font-bold text-gray-900">Contact Us</span>
            </div>
            &copy;2015-2020, Weez on Wheels, Inc.
        </footer>
    </div>

</body>
</html>