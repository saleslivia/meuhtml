<?php include('cabecalho.php');?>

<fieldset>
    <legend>De acordo com sua data de nascimento:</legend>
    <hr>

    <?php 
        $name = $_GET['name'] ? $_GET['name'] : "Dado não informado.";
        $nascimento = $_GET['nascimento'] ? $_GET['nascimento'] : "Dado não informado.";
        $dataAtual= date('Y');
        $anoNasc = substr($nascimento, -10, 4);
        $idade = $dataAtual - $anoNasc;
        
        echo "<strong>Nome Completo:</strong> $name <br>";
        echo "<strong>Data de Nascimento: </strong>" . implode('/',array_reverse(explode('-',$nascimento))) . "<br>";
        echo $idade > 122 ? "<strong>Sua idade é:</strong> Dado não informado. <br>" : "<strong>Sua idade é:</strong> $idade anos. <br>";

        if ($idade < 16){ // menor que 16 anos
            $votar = "Você ainda não pode votar!"; 
            $dirigir = "Você ainda não pode dirigir!";
        } elseif ($idade >= 16 && $idade < 18){ // entre 16 anos e 17 anos
            $votar = "Seu voto é Opcional!";
            $dirigir = "Você não pode dirigir!";
        } elseif ($idade >= 18 && $idade < 65){ // entre 18 anos e 64 anos
            $votar = "Seu voto é Obrigatório!";
            $dirigir = "Você pode dirigir!";
        } elseif ($idade >= 65 && $idade < 70){ // entre 65 anos e 69 anos
            $votar = "Seu voto é Obrigatório!"; 
            $dirigir = "Você pode dirigir, porém o tempo para renovação da CHN passa a ser de 3 anos!";
        } elseif ($idade >= 70 and $idade <= 122){ // entre 70 anos e 122 anos
            $votar = "Seu voto é Opcional!"; 
            $dirigir = "Você pode dirigir, porém o tempo para renovação da CHN passa a ser de 3 anos!";
        } elseif ($idade > 122){ // acima de 122 anos
            $votar = "Dado não informado.";  
            $dirigir = "Dado não informados. <br> <br> Volte ao formulário e insira corretamente os dados.";
        }
        echo "<strong>Pode votar:</strong> $votar <br>"; 
        echo "<strong>Pode dirigir:</strong> $dirigir";

        /*echo "$nascimento <br>";
        echo "$dataAtual <br>";
        echo "$anoNasc <br>";
        echo "$idade";*/
    ?>
</fieldset>

<br><br>

<a class="btn btn-success" href="maiorIdade_v2.php">Voltar</a>

<?php include('rodape.php');?>