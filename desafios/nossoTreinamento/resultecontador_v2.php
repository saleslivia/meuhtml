<?php include('cabecalho.php');?>
<fieldset>
    <legend>- Contador -</legend>

    <?php
        
        $numInicio = $_GET['numInicio'] ? $_GET['numInicio'] : 0;
        $numFinal = $_GET['numFinal'] ? $_GET['numFinal'] : 0;
        $forma = $_GET['forma'] ? $_GET['forma'] : "";

        echo "O número de início escolhido foi: $numInicio. <br>";
        echo "O número final escolhido foi: $numFinal. <br>";

        if($forma === 'cresc'){
            echo "A forma Crescente (do menor para o maior): <br>";
            $contador = $numInicio;
            while ($contador <= $numFinal) {
                echo $contador;
                if($contador <$numFinal){
                    echo "-";
                    }else{
                        echo ".";
                    }
                    $contador++;
                }
        }elseif($forma === 'decresc'){
            echo "A forma Decrescente (do maior para o menor): <br>";
            $contador = $numFinal;
            while ($contador >= $numInicio) {
                echo $contador;
                if($contador >$numInicio){
                    echo "-";
                    }else{
                        echo ".";
                    }
                    $contador--;
                }
            }
        /*echo "$numInicio <br>";
        echo "$numFinal <br>";
        echo $forma;*/
    ?>
</fieldset>
<br><br>
<a class="btn btn-primary" href="contador_v2.php">Voltar</a>
<?php include('rodape.php');?>