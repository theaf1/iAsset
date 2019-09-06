<html>
<head>
    <title>ระบบติดตามครุภัณฑ์คอมพิวเตอร์ - @yield('title')</title>

    
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
    <script src="{{ url('/js/bootstrap.js') }}"></script>
</head>
<body>
    @section('header')
        @show
        
    <div class="container">
    @yield('content')
</body>
<!-- <script src="{{ url('/css/popper.min.css') }}"></script> -->
<script src="{{ url('/js/bootstrap.js') }}"></script>
</html>