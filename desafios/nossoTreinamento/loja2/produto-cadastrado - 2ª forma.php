<?php include('cabecalho.php');

// $nomeProduto = $_GET['nomeProduto'] ? $_GET['nomeProduto'] : "";
// $preco = $_GET['preco'] ? $_GET['preco'] : 0;
    $nomeProduto = $_GET['nomeProduto'];
    $preco = $_GET['preco'];

    function cadastraProduto($con, $nome, $preco){
        $query = "insert into produtos2 (nome,preco) values ('{$nome}','{$preco}');";
        return mysqli_query($con,$query);
    }

    $conexao = mysqli_connect('localhost', 'root', '', 'loja2');
    

    if (cadastraProduto($conexao,$nomeProduto, $preco)){
        ?>
        <p class="alert-success">
        <strong>O produto:</strong> <?=$nomeProduto;?>
            <br>
        <strong>Com o preço:</strong> <?=$preco;?>
        <br><br>
        Foi cadastrado com sucesso!
        </p>
        <?php
    }else{
        ?>
        <div class="alert alert-warning" role="alert">
            <strong>O produto <?=$nomeProduto;?> não foi cadastrado. </strong>
        </div>
        <?php 
    }
    
    //mysqli_close($conexao);

?>

<?php include('rodape.php');?>