<?php $titulo = "Relembrando...";
    include ('cabecalho.php');
     
    $num1 = $_GET['num1'] ? $_GET['num1'] : 0;
    $num2 = $_GET['num2'] ? $_GET['num2'] : 0;
    $inc = $_GET['inc'] ? $_GET['inc'] : 0;

    if($num1<$num2){
        // echo "primeiro numero maior";
        // $cont=1;
        while ($num1 <= $num2) {
            echo $num1;
            if ($num1<$num2){
                echo "-";
               }else{
                echo ".";
               }
            $num1 +=$inc;
        }
    }else{
        // echo "Segundo numero maior";
        // $cont=$num1;
        while ($num1 >= $num2) {
        echo $num1;
        if ($num1>$num2){
            echo "-";
           }else{
            echo ".";
           }
        $num1 -=$inc;
        }
    }

    //  echo $num1;
    //  echo $num2;
    //  echo $inc;
     
?>
    <br><br>
    <a class="btn btn-outline-primary" href="contador_v3.php">Voltar</a>
<?php include ('rodape.php');?>