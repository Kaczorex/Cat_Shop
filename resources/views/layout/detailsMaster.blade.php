<html lang="pl">
<head>
  @include('layout.header')
</head>

<body>

  @include('layout.navbar')

  <div class="detailsMaster">
    <div class="container detailsMaster">
      <div class="album text-muted">
        <div class="container">
          <div class="row">

            @yield('content')

          </div>
        </div>
      </div>
    </div>
    <hr>


    @include('layout.footer')
  </div> 


</body></html>