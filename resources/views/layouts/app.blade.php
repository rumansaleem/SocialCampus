<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    @include('partials._head')

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('partials._navbar')
    @yield('content')
    @include('partials._footer')
    @include('partials._scripts')
  </body>
</html>
