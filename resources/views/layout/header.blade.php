<header>
 <!-- <nav class="navbar navbar-expand-md mb-4" style="background: #001845; height: 75px; font-size: 20px">
    <div class="container-fluid">
      <a class="navbar-brand">Vendas online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a 
              class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" 
              aria-current="@if(Route::currentRouteName() == 'homepage') page @endif" 
              href="{{route('homepage')}}"
            >
              Home
            </a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link @if(Route::currentRouteName() == 'login') active @endif" 
              aria-current="@if(Route::currentRouteName() == 'login') page @endif"
              href="{{route('login')}}"
            >
              Login
            </a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link @if(Route::currentRouteName() == 'produtos') active @endif" 
              aria-current="@if(Route::currentRouteName() == 'produtos') page @endif"
              href="{{route('produtos')}}"
            >
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link @if(Route::currentRouteName() == 'carrinho') active @endif" 
              aria-current="@if(Route::currentRouteName() == 'carrinho') page @endif"
              href="{{route('carrinho')}}"
            >
              Carrinho
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
-->

<nav class="navbar navbar-expand-lg py-2" style="background: #001845;">
  <div class="container-fluid">
      <a class="navbar-brand" href="">
          <img class="img-fluid" src="../../img/icone.png" alt="" width="48px" height="48px">
          <span style="margin-left: 10px">SóGiro SuperMercado</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav_lc">
          <ul class="d-none d-lg-flex navbar-nav mx-auto my-3 my-lg-0 position-absolute top-50 start-50 translate-middle">
              <li class="nav-item me-1">
                <a class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" 
                   href="{{route('homepage')}}"
                   aria-current="@if(Route::currentRouteName() == 'homepage') page @endif">
                   HOME
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link @if(Route::currentRouteName() == 'produtos') active @endif" 
                   href="{{route('produtos')}}"
                   aria-current="@if(Route::currentRouteName() == 'produtos') page @endif">
                   PRODUTOS
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link @if(Route::currentRouteName() == 'carrinho') active @endif" 
                   href="{{route('carrinho')}}"
                   aria-current="@if(Route::currentRouteName() == 'carrinho') page @endif">
                   <i class="fa-solid fa-cart-shopping"></i>
                </a>
              </li>
          </ul>
          <ul class="navbar-nav my-3 my-lg-0 d-lg-none">
            <li class="nav-item me-1">
              <a class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" 
                 href="{{route('homepage')}}"
                 aria-current="@if(Route::currentRouteName() == 'homepage') page @endif">
                 HOME
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link @if(Route::currentRouteName() == 'produtos') active @endif" 
                 href="{{route('produtos')}}"
                 aria-current="@if(Route::currentRouteName() == 'produtos') page @endif">
                 PRODUTOS
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link @if(Route::currentRouteName() == 'carrinho') active @endif" 
                 href="{{route('carrinho')}}"
                 aria-current="@if(Route::currentRouteName() == 'carrinho') page @endif">
                 <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </li>
          </ul>
          <div class="ms-lg-auto">
            
            <a class="btn btn-outline-primary me-2" href="#">
              Cadastrar
            </a>
            <a class="btn btn-primary" href="#">
              Login
            </a>
          </div>
      </div>
  </div>
</nav>

</header>