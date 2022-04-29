<?php
    include('cabecalho.php');
?>
    <?php
    $user = $_POST['usuario'];
    $pass = $_POST['senha'];
    if($user == 'Livia' && $pass == '1234'){
        echo '<p class="alert alert-success">
            Olá! <br>
            Login realizado com sucesso!<br>
            Seja bem vindo!
        </p>';
    }else{
        echo '<p class="alert alert-danger">
            Ops! <br>
            Algo deu errado! <br> 
            Tente novamente!
            <br><br>
            <a href="index.php" class="btn btn-danger">Tentar Novamente</a>
        </p>';
    } 
    ?>
<?php 
    include('rodape.php');
?>