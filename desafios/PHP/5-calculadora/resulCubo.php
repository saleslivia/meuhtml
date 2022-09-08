<?php $titulo = "";
    include('cabecalho.php');
    
    $cubo = $_GET['cubo'];
    // echo $cubo;

    $resul = pow ($cubo, 3);
    echo "O número <strong>$cubo</strong> ao cubo é: <strong>$resul</strong>!"

?>
<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>