<?php $titulo = "";
    include('cabecalho.php');
    
    $dobro = $_GET['dobro'];
    // echo $dobro;

    $resul = $dobro * 2;
    echo "O dobro de <strong>$dobro</strong> é: <strong>$resul</strong>!"

?>
<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>