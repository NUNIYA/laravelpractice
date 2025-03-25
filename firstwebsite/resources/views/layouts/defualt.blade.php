<!DOCTYPE html>

<head>
    <title>laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        @yield('header')
        <!--DEPENDING THE PAGE ONE IS INSIDE WE CAN CHANGE THE HEADER AS CONTACT PAGE OR HOME PAGE ETC THERE FOR WE USE THE YIELD FOR ANYTHING THAT CHANGES -->
    </header>
    <main>
        @YIELD('maincontent')

    </main>
    <footer>
        @yield('footer')
    </footer>
</body>

</html>