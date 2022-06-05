<?php $titulo = "Calculadora";
    include('cabecalho.php');?>
    <?php
        $numero1 = $_GET['numero1'] ? $_GET['numero1'] : 0;
        $numero2 = $_GET['numero2'];
        $resul = $numero1-$numero2;

         /*echo $numero1;
         echo $numero2;*/
        echo ("A Subtração de $numero1 e $numero2 = $resul");
    ?>
    <a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>