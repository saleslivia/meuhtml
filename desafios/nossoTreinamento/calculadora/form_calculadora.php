<?php $titulo = "";
    include('cabecalho.php');?>

<?php
    $operacoes = $_GET['operacoes'] ? $_GET['operacoes'] : 0;
    
    switch ($operacoes){
        case 'soma':
            echo "<form action='soma.php' method='GET'>
            <label for='iOpcao'>Gostaria de somar quantos números?</label>
            <input type='number' name='opcao' id='iOpcao' min='2' max='10' required>
            <input type='submit' value='Enviar'>
            </form>";
        break;
        case 'subtracao':
            echo "<form action='subtracao.php' method='GET'>
            <label for='iOpcao'>Gostaria de subtrair quantos números?</label>
            <input type='number' name='opcao' id='iOpcao' min='2' max='10' required>
            <input type='submit' value='Enviar'>
            </form>";
        break;
    }
    ?>

    <br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>