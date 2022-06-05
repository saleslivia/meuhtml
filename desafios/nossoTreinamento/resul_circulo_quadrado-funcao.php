<?php $titulo = "Circulo ou Quadrado";
    include('cabecalho.php');?>

<fieldset>
    <legend>Este é o resultado</legend>
    <?php
    $forma = $_GET['forma'];
    $quantidade = $_GET['quantidade'];
    
    function forma($forma, $quantidade){
        echo "A forma escolhida foi: <strong>$forma</strong><br>";
        return $forma;
    }
    //echo "$forma <br>";
    //echo "$quantidade";
    
    if (forma($forma, $quantidade)){
        for ($i=1; $i <= $quantidade; $i++) { 
        ?>
            <div class="circulo">
            <?php echo "$i";?>
            </div>
        <?php
        }
    }elseif (forma($forma, $quantidade)){
        echo "A forma escolhida foi: <strong>Quadrado</strong><br>";
        for ($i=1; $i <= $quantidade; $i++) { 
        ?>
            <div class="quadrado">
                <?php echo "$i";?>
            </div>
        <?php 
        }
    }
    ?>
</fieldset>
<br><br>
<a class="btn btn-outline-success" href="escolha_circulo_quadrado.php">Voltar</a>
<?php include('rodape.php');?>