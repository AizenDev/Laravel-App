<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #F2453E">
<a class="navbar-brand" href="#">  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About us</a>
        </li>
        @if (Auth::user())
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
          </li>
        @else
          <li class="nav-item active">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="/register">Register</a>
          </li>
        @endif
      </ul>
      @if (Auth::user())
          @if (Auth::user()->id == 1)
          <div class="profile">
            <a href="/admin"><i class="fas fa-users-cog fa-2x"></i></a>
          </div>  
          
          <div class="profile">
            <a href="{{ route('profile') }}"><i class="fas fa-user-circle fa-2x"></i></a>
          </div>
        @else
          <div class="cart">
            <a href="/cart"><i class="fas fa-cart-plus fa-2x"></i></a>
          </div>

          <div class="profile">
            <a href="{{ route('profile') }}"><i class="fas fa-user-circle fa-2x"></i></a>
          </div>
          @endif
      @endif

      <form action="{{route('findProd')}}" name="search" method="POST" class="form-inline my-2 my-lg-0">
        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
        <input name="find" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>