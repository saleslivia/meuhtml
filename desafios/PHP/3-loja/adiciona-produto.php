<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php
   $nomeProduto = $_GET['nomeProduto'];
   $preco = $_GET['preco'];

    if (insereProduto($conexao, $nomeProduto, $preco)) {
        ?>
        <p class="alert-success">
            <strong>Produto:</strong> <?=$nomeProduto?>
            <br>
            <strong>Preço:</strong> <?=$preco?>
            <br><br>
            Adicionado com sucesso!
        </p>
    <?php
    } else{
        $msg = mysqli_error($conexao);
        ?>
        <div class="alert alert-danger" role="alert">
            <strong>O produto <?=$nomeProduto?> não foi cadastrado! </strong> <br>
            <?= $msg; ?>
        </div>
    <?php
    }
    // mysqli_close($conexao); //fecha conexão com o BD
   ?>
    
<?php include('rodape.php');?>