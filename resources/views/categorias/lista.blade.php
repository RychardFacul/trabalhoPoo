    @extends('site')

    @section('section')
    <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Listagem de Categorias</h1>
        <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $show)
        <tr>
            <th scope="row">{{$show->id}}</th>
            <td>{{$show->descricao}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
    </div>
    </main>
    @endsection