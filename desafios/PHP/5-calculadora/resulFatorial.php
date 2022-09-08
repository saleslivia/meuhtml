<?php $titulo = "";
    include('cabecalho.php');
    
    $valor = $_GET['valor'] ? $_GET['valor'] : 0;
    $cont = $valor;
    $fat =1; 
    // echo $valor;
    
    do {
        $fat = $fat * $cont;
        $cont--;
    } while ($cont >= 1);
    echo " $valor! = $fat";
?>

<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>

