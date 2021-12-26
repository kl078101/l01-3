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
    {{-- 引入头部 --}}
    @include('layouts._header')

    <div class='container'>
      @yield('content')

      {{-- 引入尾部 --}}
      @include('layouts._footer')
    </div>


  </body>
</html>
