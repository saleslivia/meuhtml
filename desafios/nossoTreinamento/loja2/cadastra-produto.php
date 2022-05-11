<?php include('cabecalho.php');?>
    <form action="produto-cadastrado.php" method="get">
        <h1>Cadatrar Produto</h1>
        <br>
        <div class=" row mb-3 d-flex justify-content-center">
            <label for="iNome" class="col-form-label col-md-2"><strong>Nome do Produto:</strong></label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nomeProduto" id="iNome" aria-describedby="iNome">
            </div>
        </div>
        <div class=" row mb-3 d-flex justify-content-center">
            <label for="iPreco" class="col-form-label col-md-2"><strong>Preço do Produto:</strong></label>
            <div class="col-md-5">
                <input type="number" class="form-control" name="preco" id="iPreco" aria-describedby="iPreco">
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
<?php include('rodape.php');?>
