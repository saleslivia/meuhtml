<?php include('cabecalho.php');?>

<fieldset>
    <legend>O resultado é:</legend>

    <?php
        $numero = $_GET['numero'] ? $_GET['numero'] : 0;
        for ($i=0; $i<=$numero; $i++){
            echo $i;
            if ($i<$numero){
                echo "-";
            }else{
                echo ".";
            }
        }
    ?>
</fieldset>
<br><br>
<a class="btn btn-primary" href="contador.php">Voltar</a>
<?php include('rodape.php');?>