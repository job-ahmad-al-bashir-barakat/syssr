<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}" data-brk-skin="brk-dark-blue-1.css">

@include('layouts._head')

<body>
<div class="brk-loader">
    <div class="brk-loader__loader"></div>
</div>
@yield('shared')
<a href="#top" id="toTop"></a>
<script src="{{ asset('js/scripts.min.js') }}"></script>
@yield('script')
</body>

</html>
