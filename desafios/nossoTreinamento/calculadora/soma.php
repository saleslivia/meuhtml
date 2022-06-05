<?php $titulo = "Calculadora";
    include('cabecalho.php');
    include('funcoes.php');
    $opcao = $_GET['opcao'];
    ?>

<form action="calculo.php" method="get">
    <input type="hidden" name="escolhatotal" value="<?php echo $opcao; ?>">
    <?php
    for($i=1; $i<=$opcao; $i++){
        echo "<label for='n$i'>Digite o " . $i . "º numero: </label>
        <input type='number' name='n$i' id='n$i' min='0' max='999'><br>";
    }
    ?>
    <input type="submit" value="Enviar">
</form>
    <br><br>
    <a class="btn btn-outline-secondary" href="index.php">Home</a>
    
<?php include('rodape.php');?>

