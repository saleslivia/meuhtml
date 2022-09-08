<?php $titulo = "";
    include('cabecalho.php');
    
    $raiz = $_GET['raiz'];
    // echo $raiz;
    $resul = sqrt($raiz);
    echo "A raiz quadrada de <strong>$raiz</strong> é <strong>$resul</strong>.";
?>


<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>