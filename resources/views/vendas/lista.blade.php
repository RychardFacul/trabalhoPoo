    @extends('site')

    @section('section')
    <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Listagem de Vendas</h1>
        <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Valor</th>
        <th scope="col">Forma de Pagamento</th>
        <th scope="col">Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Mark</td>
        <td>Mark</td>
        <td>01/08/2024</td>/
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Mark</td>
        <td>Mark</td>
        <td>Mark</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry the Bird</td>
        <td>Mark</td>
        <td>Mark</td>
        <td>Mark</td>
        </tr>
    </tbody>
    </table>
    
    </div>
    </main>
    @endsection