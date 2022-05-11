<?php include('cabecalho.php');?>

<form action="resulTeste.php" method="GET">
    <fieldset>
        <legend>Validação de Maioridade</legend>
        <hr>
        <br>
        <label for="iName"><strong>Nome:</strong> </label>
        <input type="text" name="name" id="iName" maxlength="100" size="60" placeholder="Digite seu nome completo" required> 
        <br> <br>
        <label for="iNascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="iNascimento" required>
    </fieldset>
    <br><br>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>