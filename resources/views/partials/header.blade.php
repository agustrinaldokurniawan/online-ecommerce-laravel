<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('product.index')}}">Navbar</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.cart')}}"
            ><i class="fas fa-shopping-cart"></i>Cart <span class="badge badge-success">{{ Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></a
          >
        </li>
      </ul>
    </div>
    <div class="dropdown my-2 my-lg-0 ">
      <button
        class="btn btn-success btn-sm dropdown-toggle"
        type="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <i class="fas fa-user"></i> User Management
      </button>
      <div
        class="dropdown-menu dropdown-menu-lg-right"
        aria-labelledby="dropdownMenuButton"
      >
      @if(Auth::check())    
      <a class="dropdown-item" href="{{ route('user.profile')}}">Profile</a>
        <a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a>
      @else
      <a class="dropdown-item" href="{{ route('user.signup')}}">SignUp</a>
        <a class="dropdown-item" href="{{ route('user.signin')}}">SignIn</a>
      @endif
      </div>
    </div>
  </div>
</nav>