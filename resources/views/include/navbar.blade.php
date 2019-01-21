<link rel="stylesheet" href=" {{ asset('js/myScript.js') }}">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="{{ route('home') }}">Cafeteria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4" id = 'home'>
          <a class="nav-link text-uppercase text-expanded" href="{{ url('/') }}">Home
            <!-- <span class="sr-only">(current)</span> -->
          </a>
        </li>
        <li class="nav-item px-lg-4" id = 'about'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('showAbout') }}">About</a>
        </li>
        <li class="nav-item px-lg-4" id = 'restaurants'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('showMainPage') }}">Restaurants</a>
        </li>
        <li class="nav-item px-lg-4" id = 'foods'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('showFoods') }}">Foods</a>
        </li>
        <li class="nav-item px-lg-4" id = 'drinks'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('showDrinks') }}">Drinks</a>
        </li>
        <li class="nav-item px-lg-4" id = 'new-restaurant'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('show') }}">New Restaurant</a>
        </li>
        <li class="nav-item px-lg-4" id = 'new-restaurateur'>
          <a class="nav-link text-uppercase text-expanded" href="{{ route('showRestaurateur') }}">New Restaurateur</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
