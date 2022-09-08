<?php $titulo = "";
    include('cabecalho.php');
    
    $primo = $_GET['primo'];
    $num = 0;

    // echo $primo;
    echo  "O número <strong>$primo</strong> tem os seguintes divisores:";
    for ($i=1; $i <= $primo; $i++) { 
        if ($primo % $i == 0){
            
            $num ++;
            echo " <strong>$i</strong> ";
        } 
    }
    if($num<=2){
        echo "<br><br>- O número <strong>$primo</strong> é primo.";
    }else{
        echo "<br><br>- O número <strong>$primo</strong> não é primo.";
    }

?>
<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>