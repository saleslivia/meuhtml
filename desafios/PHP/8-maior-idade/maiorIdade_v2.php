<?php $titulo = "usando if e elseif - organizado";
    include('cabecalho.php');?>

<form action="resulMaiorIdade_v2.php" method="GET">
    <fieldset>
        <legend>Validação de Maioridade</legend>
        <hr>
        <br>
        <div class="mb-3 row">
            <label class="form-check-label col-1" for="iName"><strong>Nome:</strong> </label>
            <div  class="col-10">
                <input class="form-control" type="text" name="name" id="iName" maxlength="80" size="60" placeholder="Digite seu nome completo" required>
            </div>
        </div>
        <br>
        <div class="mb-3 row">
            <label class="form-check-label col-3" for="iNascimento">Data de Nasc.:</label>
            <div class="col-3">
                <input class="form-control" type="date" name="nascimento" id="iNascimento" required>
            </div>
        </div>
    </fieldset>
    <br>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>