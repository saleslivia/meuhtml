<?php include('cabecalho.php');?>

<?php
    $numero = $_GET['numero'] ? $_GET['numero'] : 0;
    $calcular = $_GET['calcular'] ? $_GET['calcular'] : "Não informado";

    switch ($calcular){
        case 'dobro':
        case 'duplicar':
            $resultado = $numero*2;
            echo "O dobro de $numero é: $resultado <br>";
            break;

        case 'raiz':
            $resultado = sqrt($numero);
            echo "A raiz quadrada de $numero é: $resultado <br>";
            break;

        case 'cubo':
            $resultado = pow($numero, 3);
            echo "$numero ao cubo é: $resultado <br>";
            break;
    }

    /*echo " O número escolhido foi: $numero <br>";
    echo " O cálculo escolhido foi: $calcular";*/

?>
<br><br>
<a href="calculadora.php">Voltar</a>
<?php include('rodape.php');?>