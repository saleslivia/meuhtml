<?php include('cabecalho.php');?>

<fieldset>
    <legend>- Contador -</legend>

    <?php
        $numero = $_GET['numero'] ? $_GET['numero'] : 0;
        $forma = $_GET['forma'] ? $_GET['forma'] : "";
        $i=0;

        echo "O número escolhido foi <strong>$numero</strong>. <br> Este é o resultado: <br> <br>";

        switch ($forma){
            case 'cresc':
                while ($i <= $numero) {
                    echo $i;
                    if ($i<$numero){
                        echo "-";
                    }else{
                        echo ".";
                    }
                    $i++;
                }
            break;
            case 'decresc':
                while ($i <= $numero) {
                    echo $numero;
                    if ($i<$numero){
                        echo "-";
                    }else{
                        echo ".";
                    }
                    $numero--;
                }
            break;
        }
        

        /*echo "$numero <br>";
        echo $forma;*/
    ?>
</fieldset>
<br><br>
<a class="btn btn-primary" href="contadorExtra.php">Voltar</a>
<?php include('rodape.php');?>