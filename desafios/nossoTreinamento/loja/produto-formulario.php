<?php include('cabecalho.php');?>

            <form action="adiciona-produto.php" method="get">
                <h1>Cadatrar Produto</h1>
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="iNome" class="col-form-label col-md-2">Nome do Produto:</label>
                    <div class="col-md-5">
                        <input type="text"class="form-control" name="nomeProduto" id="iNome">
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="iPreco" class="col-form-label col-md-2">Preço</label>
                    <div class="col-md-5">
                        <input type="number" class="form-control" name="preco" id="iPreco">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
<?php include('rodape.php');?>
