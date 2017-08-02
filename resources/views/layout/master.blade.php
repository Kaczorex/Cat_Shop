<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="buy your cat">
  <meta name="description" content="sklep">
  <meta name="author" content="Paweł Karczmarczyk">
  <link rel="icon" href="../../favicon.ico">
  <title>Buy your cat</title>
  <!-- Bootstrap core CSS -->
  <link href="/css/app.css" rel="stylesheet">
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