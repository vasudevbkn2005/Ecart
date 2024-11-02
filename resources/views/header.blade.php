<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')) {
  $total = ProductController::cartItem(); // Ensure method name matches your controller method
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="margin-left: 5px">
    <a class="navbar-brand" href="/">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8C8OqLN8b07nWYOvyJqKH_gBz1khrb024OQ&s" alt="Ecart Logo" height="30" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="margin-right: 5px">
            <a class="nav-link" href="/">Home</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item" style="margin-left: 250px ">
          <form action="/search" class="d-none d-lg-flex"> <!-- Hide on mobile -->
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/004/798/846/small/shopping-cart-logo-or-icon-design-vector.jpg" height="30px" width="30px" alt="Cart">
            Cart ({{$total}})
          </a>
        </li>
        @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Session::get('user')['name'] }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <li class="nav-item" style="margin-right: 5px">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand img {
    transition: transform 0.3s;
}

.navbar-brand img:hover {
    transform: scale(1.1);
}

.nav-link {
    font-weight: 500;
}

.nav-link:hover {
    color: #28a745; /* Change color on hover */
}
</style>
