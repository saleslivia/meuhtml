<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php 
    $aluno = listaAluno($conexao);
    // var_dump($aluno);

?>
<table class="table table-striped">
    <thead class="table-dark">
        <th>ID</th>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Curso</th>
        <th>Deletar</th>
    </thead>
<?php
    foreach($aluno as $alunos){
?>
    <tr>
        <td><?= $alunos['id'];?></td>
        <td><?= $alunos['matricula'];?></td>
        <td><?= $alunos['nome'];?></td>
        <td><?= $alunos['email'];?></td>
        <td><?= $alunos['curso'];?></td>
        <td><a class="btn btn-danger btn-custom glyphicon glyphicon-trash btn-icon" href="deletar-aluno.php?id=<?=$alunos['id'];?>&nome=<?=$alunos['nome'];?>&matricula=<?=$alunos['matricula'];?>">Excluir</a></td>
    </tr>
<?php  
    }
?>
</table>

<?php include('rodape.php');?>