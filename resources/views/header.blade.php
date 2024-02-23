<?php
use App\Http\Controllers\productController;
$total = 0;
if(Session::has('user'))
{
  $total = productController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">desirecart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li> 
        
      </ul>
      <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <li class="nav-item">
        <a  style="text-decoration:none" class="nav-link" href="cartlist">cart({{$total}})</a>
      </li> 
      @if(Session::has('user'))
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="nav-link" href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        @else
        <li><a href="/register">login</a></li>
        <li><a href="/registration">registration</a></li>
      @endif
    </div>
  </div>
</nav>