<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>



    <div class="container">

      <div class="page-header">
        <h1>Eventos</h1>
      </div>

      @yield('content')

      <footer class="footer">
        <p>Sistema de Eventos</p>
      </footer>

    </div>

    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
