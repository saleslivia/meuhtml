<?php 
    $texto = $_GET['texto'] ? $_GET['texto'] : "Texto não informado";
    $tamanho = $_GET['tamanho'] ? $_GET['tamanho'] : "Tamanho não informado";
    $cor = $_GET['cor'] ? $_GET['cor'] : "Cor não informada";
    $alinhamento = $_GET['alinhamento'] ? $_GET['alinhamento'] : "Não informado";
    $negrito = $_GET['negrito'] ? $_GET['negrito'] : "normal";
    $italico = $_GET['italico'] ? $_GET['italico'] : "normal";
    $sublinhado = $_GET['sublinhado'] ? $_GET['sublinhado'] : "normal";

?>
<?php include('cabecalho.php');?>
<fieldset>
    <legend>Seu texto formatado:</legend>
    <br> <br>
    <?php
        //SEM O USO DE CLASSE
        /*$texto = $_GET['texto'] ? $_GET['texto'] : "Texto não informado";
        $tamanho = $_GET['tamanho'] ? $_GET['tamanho'] : "Tamanho não informado";
        $cor = $_GET['cor'] ? $_GET['cor'] : "Cor não informada";
        $alinhamento = $_GET['alinhamento'] ? $_GET['alinhamento'] : "Não informado";
        $negrito = $_GET['negrito'] ? $_GET['negrito'] : "Não informado";
        
        echo "<p style='font-size: $tamanho" . "px; color:$cor; text-align:$alinhamento; font-weight:$negrito;'>$texto </p>";*/

        //COM O USO DE CLASSE

        echo "<p class='treino'>$texto </p>";

        /*echo "$texto <br>";
        echo "$tamanho <br>";
        echo "$cor <br>";
        echo "$alinhamento <br>";
        echo "$negrito <br>";
        echo "$italico <br>";
        echo "$sublinhado <br>";*/
    ?>
</fieldset>

<br><br>
<a class="btn btn-outline-success" href="formataTexto.php">Voltar</a>
<?php include('rodape.php');?>