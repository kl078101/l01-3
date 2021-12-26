<!DOCTYPE html>
<html lang='zh_CN'>
  <head>
    <title>@yield('title', '句子鸭鸭') - 句子鸭鸭</title>

    {{-- 引入 CSS --}}
    <link rel="stylesheet" type="text/css" href="style/css/css.css" />

    {{-- 引入 Bootstrap CDN--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
      </div>
    </nav>

    <div class='container'>
      @yield('content')
    </div>
  </body>
</html>
