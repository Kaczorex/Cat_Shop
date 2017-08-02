

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Shop</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
   {{--  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul> --}}
    <div class="ml-auto">
      @if (Auth::check())
          @if(Auth::user()->name =='Admin')
         <a href="{{route('admin')}}"> Administrator</a> <div class="separation"> </div>
          @endif
      @endif

      @if(Auth::guest())

      <form class="form-inline" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control" name="password" placeholder="Passowrd" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">
           Login
         </button>
       </div>

     </form>

     @else 
     <a href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
     Logout
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
  @endif
</div>
</div>
</nav>
