<!doctype html>
<html>
    <head> 
        @include('includes.meta')
        <title>@yield('title') | Landing Page</title>

        <link rel="apple-touch-icon" href="">
        <link rel="shortcut icon" type="image/x-icon" href="">

        @stack('before-style')
        <!-- stack memungkinkan kita untuk menyisipkan script tambahan, yang berjalan hanya pada page tertentu -->

        @include('includes.style')

        @stack('after-style')
    </head>

    <body>
        @include('includes.header')
            @yield('content')
        @include('includes.footer')

        @stack('before-script')

        @include('includes.script')

        @stack('after-script')
    </body>


</html>