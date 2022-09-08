<?php $titulo = "";
    include('cabecalho.php');?>

<?php
    $escolhatotal = $_GET['escolhatotal'];
    //  echo $escolhatotal;
    $total = 0;
    // $i=1;
    // for ($i=1; $i <= $escolhatotal; $i++) { 
    //     $total= $total + $_GET["n$i"];
    //     // echo " $opcao";
    // }
    while($i<=$escolhatotal){
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url])?$_GET[$url]:0;
        $i++;
    }
    echo "$num1 $num2 $num3 $num4 $num5";
    $i=1;
    while($i<=$escolhatotal){
        $v = "num".$i;
        echo "Valor $i: ". $$v ."<br/>";
        $i++;
     }

    echo "Você escolheu somar $escolhatotal números. O resultado é $total!" ;
?>
<br><br>
    <a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');
?>