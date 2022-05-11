<?php $titulo = "Usando For";
    include('cabecalho.php');?>

    <form action="resultecontador.php" method="get">
        <fieldset>
            <legend>- Contador -</legend>
            <br>
            <div>
                <label for="iNumero">Ate qual número você quer que eu conte (entre 0 e 99):</label>
                <input type="number" name="numero" id="INumero" min="0" max="99" required>
            </div>
            <br>
        </fieldset>
        <input class="btn btn-primary" type="submit" value="Contar">
    </form>

<?php include('rodape.php');?>