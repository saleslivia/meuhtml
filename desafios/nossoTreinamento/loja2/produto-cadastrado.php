<?php include('cabecalho.php');

$nomeProduto = $_GET['nomeProduto'] ? $_GET['nomeProduto'] : "";
$preco = $_GET['preco'] ? $_GET['preco'] : 0;
?>

<p class="alert-success">
    <strong>O produto:</strong> <?=$nomeProduto;?>
        <br>
    <strong>Com o preço:</strong> <?=$preco;?>
    <br><br>
    Foi cadastrado com sucesso!
</p>
<?php include('rodape.php');?>
