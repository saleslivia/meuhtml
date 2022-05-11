<?PHP include('cabecalho.php');?>

<form action="resulMultiplicacao.php" method="get">
    <fieldset>
        <legend>Multiplicar</legend>
        <p>Para gerar uma tabela de multiplicação ate 10, escolha um numero.</p>
        <label for="iNumero">Escolha um número entre 1 e 999:</label>
        <input type="number" name="numero" id="iNumero" min="0" max="999" required>
        <br>
    </fieldset> <br> <br>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>

<?PHP include('rodape.php');?>

