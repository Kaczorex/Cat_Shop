<html lang="{{ app()->getLocale() }}">
<head>
  @include('layout.header')
</head>

<body>

  @include('layout.navbar')



  @yield('contentMaster')


  <hr>

  @include('layout.footer')


</body></html>