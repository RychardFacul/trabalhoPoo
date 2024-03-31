<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.122.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        @yield('estilos')
        
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

        @yield('section')

        @include('layout.footer')
    </body>
</html>