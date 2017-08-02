<html lang="{{ app()->getLocale() }}">
<head>
@include('layout.header')
</head>

<body>

  @include('layout.navbar')

  @include('layout.jumbotron')

  <div class="container">
    <div class="album text-muted">
      <div class="container">
        <div class="row">

          @yield('content')
          
        </div>
      </div>
    </div>
    <hr>

    @include('layout.footer')
  </div> 


</body></html>