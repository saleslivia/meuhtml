<?php $titulo = "Usando Switch com While";
    include('cabecalho.php');?>

    <form action="resulteContador-extra.php" method="get">
        <fieldset>
            <legend>- Contador -</legend>
            <br>
            <div class=" mb-3 row">
                <div >
                    <label class="col-7 form-check-label" for="iNumero"> O sistema deve contar ate (entre 0 e 99):</label>
                    <input class="col-1" type="number" name="numero" id="INumero" min="0" max="99" required>
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