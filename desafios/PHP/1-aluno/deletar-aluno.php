<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php 
    $id = $_GET['id'];
    $matricula = $_GET['matricula'];
    $nome = $_GET['nome'];

    deletaAluno($conexao, $id);
?>
    <p class="alert-success"> O Aluno: <?=$nome;?> | de id: <?=$id;?> | e matrícula: <?=$matricula;?> foi removido com sucesso!</p>
<?php include('rodape.php');?>