<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet">

    @yield('css')
</head>


<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    @include('admin.shared.nav-builder')
</div>
<div class="c-wrapper">
    @include('admin.shared.header')

    <div class="c-body">

        <main class="c-main">

            @yield('content')

        </main>
    </div>
    @include('admin.shared.footer')
</div>


<!-- CoreUI and necessary plugins-->
<script src="{{ asset('js/pace.min.js') }}"></script>
<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/coreui-utils.js') }}"></script>
@yield('javascript')
</body>
</html>
