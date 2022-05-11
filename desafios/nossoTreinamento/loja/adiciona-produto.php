<?php include('cabecalho.php');?>

<?php
   $nomeProduto = $_GET['nomeProduto'] ? $_GET['nomeProduto'] : "Produto não informado";
   $preco = $_GET['preco'] ? $_GET['preco'] : 0;
   ?>
    <p class="alert-success">
        <strong>Produto:</strong> <?=$nomeProduto;?>
        <br>
        <strong>Preço:</strong> <?=$preco;?>
        <br><br>
        Adicionado com sucesso!
    </p>
<?php include('rodape.php');?>