<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php 
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    deletaProduto($conexao, $id);
    
?>
<p class="alert-success"> O produto: <?=$nome;?> | de id: <?=$id;?> foi removido com sucesso!</p>
<?php include('rodape.php');?>