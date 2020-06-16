<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Cagnolini</title>
  </head>
  <body>
    <header>
      @include('header')
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      @include('footer')
    </footer>
  </body>
</html>
