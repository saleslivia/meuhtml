<?php $titulo = "Calculadora";
    include('cabecalho.php');
    include('funcoes.php');?>

<?php
    $numero1 = $_GET['numero1'] ? $_GET['numero1'] : 0;
    $numero2 = $_GET['numero2'] ? $_GET['numero2'] : 0;

        /*echo $numero1;
        echo $numero2;*/

    $resul = operacao($numero1, $numero2);
    print ("A soma de $numero1 e $numero2 = $resul");
?>
    <br><br>
    <a class="btn btn-outline-secondary" href="index.php">Home</a>
    
<?php include('rodape.php');?>


    <!-- function operacao(){
        $soma = func_get_args();
        $total = func_num_args();
        $s=0;
        for($i=0;$i<$total; $i++){
            $s=$s+$soma[$i];
        }
        return $s;
    } -->