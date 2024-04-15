<header>
  <nav class="navbar navbar-expand-md mb-4" style="background: #001845; height: 75px; font-size: 20px">
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
</header>