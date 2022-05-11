<?php include('cabecalho.php');?>

<fieldset>
    <legend>Informação:</legend>
<br>
<?php 
    $dias = $_GET['dias'] ? $_GET['dias'] : "";
    //$dias = $dias == 'sabado' ? "Sábado" : $dias;

    switch($dias){
        case 'segunda-feira':
        case 'terca-feira':
        case 'quarta-feira':
        case 'quinta-feira':
        case 'sexta-feira':
            switch ($dias) {
                case 'terca-feira':
                    echo "Hoje é <strong>Terça-Feira</strong>. <br> Você precisa trabalhar!";
                break;

                case 'sexta-feira':
                    echo "<strong>Sextou!</strong>";
                break;

                default:
                    echo "Hoje é <strong>" . ucfirst($dias) . "</strong>. <br> Você precisa trabalhar!";
                break;
            } 
        break;
        
        case 'sabado':
        case 'domingo':
            if ($dias=='sabado') {
                echo "Hoje é <strong>Sábado</strong>. <br> Você está de folga. Bom descanso!";
            }else{
                echo "Hoje é <strong>Domingo</strong>. <br> Você está de folga. Bom descanso!";
            }
            break;
    }
    //echo "O dia da semana escolhido foi: $dias";
?>
</fieldset>
<br><br>
<a class="btn btn-outline-success" href="semana.php">Voltar</a>
<?php include('rodape.php');?>