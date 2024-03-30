    @extends('site')

    @section('section')
    <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Exclusão de Produto</h1>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Categoria 1</option>
                    <option value="1">Categoria 2</option>
                    <option value="2">Categoria 3</option>
                    <option value="3">Categoria 4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Validade</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Valor</label>
                <input type="numeric" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </main>
    @endsection