<?php $titulo = "";
    include('cabecalho.php');
    
    $tabuada = $_GET['tabuada'];
    // echo $tabuada;
    for ($i=1; $i <= 10; $i++) { 
        $cont = $tabuada * $i ;
        echo "$tabuada x $i = $cont <br>";
        // echo "$tabuada x $i = " . $tabuada * $i . "<br>";
    }
?>
<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>