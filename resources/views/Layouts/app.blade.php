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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00308f;">
  <a class="navbar-brand" href="#">ระบบติดตามครุภัณฑ์คอมพิวเตอร์</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          เมนูหลัก
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">เพิ่มครุภัณฑ์คอมพิวเตอร์</a>
          <a class="dropdown-item" href="#">เพิ่มครุภัณท์อุปกรณ์ต่อพ่วง</a>
          <a class="dropdown-item" href="#">เพิ่มครุภัณท์อุปกรณ์โครงสร้างพื้นฐาน</a>
          <a class="dropdown-item" href="#">เพิ่มครุภัณท์อุปกรณ์สนับสนุน</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
    @yield('content')
</body>
<!-- <script src="{{ url('/css/popper.min.css') }}"></script> -->
<script src="{{ url('/js/bootstrap.js') }}"></script>
</html>