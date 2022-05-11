<?php $titulo = "Concatenação e Decl. de var. no Style";
    include('cabecalho.php');?>

<form action="resulFormSextaFeira.php" method="GET">
    <fieldset>
        <legend>Formata Texto</legend>
            <div class=" mb-3 row">
                <label class=" form-check-label col-3" for="iTexto">Digite um texto:</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="texto" id="iTexto">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="form-label col-sm-3" for="iTam"> Informe o Tamanho</label>
                <div class="col-sm-2">
                    <select class="form-select" name="tamanho" id="iTam">
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="72">72</option>
                        <option value="150">150</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="form-label col-3" for="iCor"> Informe a Cor:</label>
                <div class="col-6">
                    <input class="form-control form-control-color" type="color" name="cor" id="iCor">
                </div>
            </div>
            <br>
            <br>
    </fieldset>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>