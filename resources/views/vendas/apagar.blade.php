    @extends('site')

    @section('section')
    <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Exclusão de Venda</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cliente 1</option>
                    <option value="1">Cliente 2</option>
                    <option value="2">Cliente 3</option>
                    <option value="3">Cliente 4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Forma de Pagamento</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>À vista</option>
                    <option value="1">Pix</option>
                    <option value="2">Cartão Débito</option>
                    <option value="3">Cartão Crédito</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Valor</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </main>
    @endsection