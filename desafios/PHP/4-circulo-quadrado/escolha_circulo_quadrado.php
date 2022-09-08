<?php $titulo = "Circulo ou Quadrado";
    include('cabecalho.php');?>

<form action="resul_circulo_quadrado.php" method="get">
    <fieldset>
        <legend>- Desenhando formas -</legend>
        <div class="row">
            <label for="iForma">Qual forma você deseja desenhar?</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="forma" id="iCirculo" value="circulo">
            <label for="iCirculo">Circulo</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="forma" id="iQuadrado" value="quadrado">
            <label for="iQuadrado">Quadrado</label>
        </div>
        <br><br>
        <div class="mb-3 row">
          <label for="iQuantidade" class="form-label">Qual a quantidade de impressões?</label>
          <div class="col-sm-2">
                <input type="number" class="form-control" name="quantidade" id="" aria-describedby="helpId">
            </div>
        </div>
        <div class="mb-3 row">
          <label for="iCor" class="form-label">Qual cor você Escolhe?</label>
            <div class="col-sm-2">
                <input type="color" class="form-control" name="cor" id="iCor" aria-describedby="helpId" value="cor">
            </div>
        </div>
    </fieldset>
    <br>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>