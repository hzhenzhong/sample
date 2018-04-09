<!DOCTYPE html>
<html>
<script src="/js/app.js"></script>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
   @include('module._head')
   
      @if (Auth::check())
      <div class="daohang">
      @include('module.daohang')
      </div> 
      @endif
      <section id="content">
      <div class="container" id="containeraa">
      @include('shared._messages')
      @yield('content')
      </div>    
      </section>
      @include('module._footer')
  </body>
</html>
