<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
   @include('module._head')

    <div class="container">
      @yield('content')
      @include('module._footer')
    </div>    
  </body>
</html>