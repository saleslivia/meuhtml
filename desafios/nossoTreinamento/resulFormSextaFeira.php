<?php include('cabecalho.php');?>

<fieldset>
    <legend><strong>Texto Formatado:</strong></legend>
    <?PHP
    $texto = $_GET['texto'] ? $_GET['texto'] : "";
    $tamanho = $_GET['tamanho'] ? $_GET['tamanho'] : "2";
    $cor = $_GET['cor'] ? $_GET['cor'] : "";

    echo "<p style='font-size: $tamanho" . "px; color: $cor;'>$texto</p>";
    
    /*echo "$texto <br>";
    echo "$tamanho <br>";
    echo "$cor <br>";*/
    ?>
</fieldset>
<a class="btn btn-outline-danger" href="formSextaFeira.php">Voltar</a>


<?php include('rodape.php');?>