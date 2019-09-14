<!DOCTYPE html>
<html>
<head>
    <title>Syssr | @yield('title')</title>

    @include('parts._meta')
    @include('parts._scripts_head')
    @include('parts._styles')

    @yield('css')    

</head>
<body>

    @yield('content')


    @include('parts._scripts_body')

    @yield('js')
</body>
</html>