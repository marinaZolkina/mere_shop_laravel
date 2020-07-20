<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_desc', 'Shop based on Laravel')">
    <meta name="keywords" content="@yield('meta_key', 'shop, laravel')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

@include('frontend.default.partials.nav')

<section class="container">
    <br/><br/><br/>
    <div id="pjax-container">
    @yield('content')
    </div>
</section>

<style>
.context-dark {
    color: rgba(255, 255, 255, 0.8);
}
</style>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/pjax.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
    var count = '{{ $cart_qty }}';
</script>
</body>
</html>