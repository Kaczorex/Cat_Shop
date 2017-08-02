 <!-- Main jumbotron for a primary marketing message or call to action -->
 <div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Czesć&zwnj;@if(!Auth::guest()), {{Auth::user()->name}} @endif</h1>
    <p>Nasz sklep oferuje bardzo duży wybór kotów! Zobacz jakie nowe koty, zamówiliśmy specjalnie dla ciebie!</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Zobacz nowe koty »</a></p>
  </div>
</div>