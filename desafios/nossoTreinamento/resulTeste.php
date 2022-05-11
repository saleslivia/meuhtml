<?php include('cabecalho.php');?>

<fieldset>
    <legend>De acordo com sua data de nascimento:</legend>
    <hr>

<?php 
    $name = $_GET['name'] ? $_GET['name'] : "Dado não informado!";
    $nascimento = $_GET['nascimento'] ? $_GET['nascimento'] : "Dado não informado!";
    //$data = new DateTime();
    //$dataAtual = $data->format('d-m-Y');
    //$dataAtual = $data->format('Y-m-d h:i:s a');
    $dataAtual= date('Y');
    $anoNasc = substr($nascimento, -10, 4);

    $idade = $dataAtual - $anoNasc;

    echo "<strong>Nome Completo:</strong> $name <br>";
    echo "<strong>Data de Nascimento: </strong>" . implode('/',array_reverse(explode('-',$nascimento))) . "<br>";
    if($idade <16){
        echo "<strong>Sua idade é:</strong> $idade anos.<br>";
        echo "<strong>Pode votar:</strong> Você ainda não pode votar!<br>"; 
        echo "<strong>Pode dirigir:</strong> Você ainda não pode dirigir! <br>";
    } elseif($idade >=16 && $idade <18 || $idade >70){
        echo "Sua idade é: $idade anos.<br>";
        echo "Pode votar: Seu voto é Opcional!<br>"; 
        echo "Pode dirigir: Você não pode dirigir! <br>";
    }elseif($idade >18 && $idade <70){
        echo "Sua idade é: $idade anos.<br>";
        echo "Pode votar: Você pode votar!<br>"; 
        echo "Pode dirigir: Você pode dirigir! <br>";
    }else{
        echo "Dados incorretos!";
    }
    
    
/*echo "$nascimento <br>";
echo "$dataAtual <br>";
echo "$anoNasc <br>";
echo "$idade";*/

?>
</fieldset>
<br><br>
<a class="btn btn-success" href="teste.php">Voltar</a>
<?php include('rodape.php');?>