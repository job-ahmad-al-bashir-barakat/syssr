<!DOCTYPE html>
<html class="brk-preloader" lang="en" data-brk-skin="brk-dark-blue-1.css">

@include('layouts._head')

<body>
@yield('shared')
<a href="#top" id="toTop"></a>
<script src="{{ asset('js/scripts.min.js') }}"></script>
@yield('script')
</body>

</html>
