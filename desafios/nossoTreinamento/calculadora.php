<?php $titulo = "Uso de Switch";
    include('cabecalho.php');?>

<form action="resulCalculadora.php" method="get">
    <fieldset>
        <legend>Calculadora</legend>
        <div>
            <label for="iNumero">Digite um número:</label>
            <input type="number" name="numero" id="iNumero">
        </div>
        <br>
        <div>
            <p>O que você deseja calcular?</p>
            <input type="radio" name="calcular" id="iDobro" value="dobro" required>
            <label for="iDobro">Dobro</label>

            <input type="radio" name="calcular" id="iDuplicar" value="duplicar">
            <label for="iDuplicar">Duplicar</label>

            <input type="radio" name="calcular" id="iQuadrado" value="raiz">
            <label for="iQuadrado">Raiz Quadrada</label>
            
            <input type="radio" name="calcular" id="iCubo" value="cubo">
            <label for="iCubo">Cubo</label>
        </div>
    </fieldset>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Calcular">
</form>

<?php include('rodape.php');?>