<?php include('cabecalho.php');

if ($_POST){ //verifica se alguma informação foi enviada (também tratado no front com o required)
    $distancia = $_POST['distancia'];
    $consumo = $_POST['consumo'];

    if(is_numeric($distancia) && is_numeric($consumo)){ //verifica se as informações enviadas são numéricas (também tratado no front com o input type number)
        if($distancia > 0 && $consumo > 0){
            $gasolina = 7.37;
            $alcool = 5.57;
            $diesel = 7.49;

            // echo "$distancia <br> $consumo";

            $calculoGasolina = ($distancia / $consumo) * $gasolina;
            $calculoGasolina= number_format($calculoGasolina,2,',','.');

            $calculoAlcool = ($distancia / $consumo) * $alcool;
            $calculoAlcool = number_format($calculoAlcool,2,',','.');

            $calculoDiesel = ($distancia / $consumo) * $diesel;
            $calculoDiesel = number_format($calculoDiesel,2,',','.');

            echo "A distância a ser percorrida é de <strong>$distancia Km</strong>, em um carro com autonomia de <strong>$consumo Km/l</strong>. <br><br>";
            echo "O gasto com <strong>gasolina</strong> será de <strong>R$$calculoGasolina</strong>.<br>";
            echo "O gasto com <strong>alcool</strong> será de <strong>R$$calculoAlcool</strong>.<br>";
            echo "O gasto com <strong>diesel</strong> será de <strong>R$$calculoDiesel</strong>.";
            }else{
                echo "O valor da Distância e do Consumo devem ser maiores que zero!";
            }
    }else{
        echo"O valor informado não é numérico!";
    }
}else{
        echo "Nenhum valor foi enviado pelo formulário!";
    }

?>
<br><br>
<a class="btn btn-outline-primary" href="consumo.php">Voltar</a>
<?php include('rodape.php');?>