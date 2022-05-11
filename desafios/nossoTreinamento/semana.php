<?php $titulo = "Usando Switch's aninhados";
    include('cabecalho.php');?>

<form action="resulSemana.php" method="get">
    <fieldset>
        <legend>Dias da Semana:</legend>
        <br>
        <label class="col-8" for="iDias">Dias da Semana</label>
        <div class="col-4">
            <select class="form-select" name="dias" id="iDias" required>
                <option value="" selected="selected" disabled>Escolha uma opção:</option>
                <option value="segunda-feira">Segunda-Feira</option>
                <option value="terca-feira">Terça-Feira</option>
                <option value="quarta-feira">Quarta-Feira</option>
                <option value="quinta-feira">Quinta-Feira</option>
                <option value="sexta-feira">Sexta-Feira</option>
                <option value="sabado">Sábado</option>
                <option value="domingo">Domingo</option>
            </select>
        </div>
    </fieldset>
    <br><br>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>