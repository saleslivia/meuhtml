<?php $titulo = "Usando If e While";
    include('cabecalho.php');?>

    <form action="resultecontador_v2.php" method="get">
    <fieldset>
        <legend>- Contador -</legend>
        <br>
        <div class=" mb-3 row">
            <div >
                <label class="col-4 form-check-label" for="iInicio"> Qual o número de início?</label>
                <input class="col-1" type="number" name="numInicio" id="iInicio" required>
            </div>
        </div>
        <div class=" mb-3 row">
            <div >
                <label class="col-4 form-check-label" for="iFinal"> Qual o número final?</label>
                <input class="col-1" type="number" name="numFinal" id="Ifinal" required>
            </div>
        </div>
        <br>

        <label for="iFormaContagem">Qual a ordem da contagem?</label>
        <div>
            <input class="form-check-input" type="radio" name="forma" id="iCresc" value="cresc" checked>
            <label for="iCresc">Crescente</label>
        <div>
            <input class="form-check-input" type="radio" name="forma" id="iDecresc" value="decresc">
            <label for="iDecresc">Decrescente</label>
        </div>
        <br>
    </fieldset>
    <input class="btn btn-primary" type="submit" value="Contar">
    </form>

<?php include('rodape.php');?>