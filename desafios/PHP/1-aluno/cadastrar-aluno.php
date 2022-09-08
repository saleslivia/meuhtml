<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php 
    $matriculaAluno = $_GET['matriculaAluno'];
    $nomeAluno = $_GET['nomeAluno'];
    $emailAluno = $_GET['emailAluno'];
    $cursoAluno = $_GET['cursoAluno'];

    // echo $matriculaAluno ."<br>";
    // echo $nomeAluno ."<br>";
    // echo $emailAluno ."<br>";
    // echo $cursoAluno;
    if(insereAluno($conexao,$matriculaAluno,$nomeAluno,$emailAluno, $cursoAluno)){
?>
        <p class="alert-success">
            <strong>Matrícula:</strong> <?=$matriculaAluno;?>
            <br>
            <strong>Nome:</strong> <?=$nomeAluno;?>
            <br>
            <strong>E-mail:</strong> <?=$emailAluno;?>
            <br>
            <strong>Curso:</strong> <?=$cursoAluno;?>
            <br><br>
            Aluno adicionado com sucesso!
        </p>
<?php
    } else{
        $msg = mysqli_error($conexao);
?>
        <div class="alert alert-danger" role="alert">
            <strong>O Aluno <?=$nomeAluno;?> não foi cadastrado! </strong> <br>
            <?= $msg;?>
        </div>
<?php
    }
?>

<?php include('rodape.php');?>