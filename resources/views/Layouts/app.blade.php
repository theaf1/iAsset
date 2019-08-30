<html>
<head>
    <title>ระบบติดตามครุภัณฑ์คอมพิวเตอร์ - @yield('title')</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
</head>
<body>
    @section('header')
        @show
        
    <div class="container">
    @yield('content')
</body>
</html>