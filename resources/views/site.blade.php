<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/home.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @yield('links')
        
        <title>
            @hasSection('title')
                @yield('title') - Vendas Online
            @else
                Vendas Online
            @endif
        </title>

        <script src="../assets/js/color-modes.js"></script>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        @yield('scripts')
    </head>
    <body>
        @include('layout.header')
        <!---Modified By Jose--->
        <main class="container-fluid">
            @yield('section')
        </main>

        @include('layout.footer')
    </body>
</html>