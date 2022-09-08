<?php 
$forma = $_GET['forma'];
$quantidade = $_GET['quantidade'];
$cor = $_GET['cor'];
$titulo = "Circulo ou Quadrado";
    include('cabecalho.php');?>

<fieldset>
    <legend>Este é o resultado</legend>
    <?php
    
    
    // echo "$forma <br>";
    // echo "$quantidade<br>";
    // echo "$cor";
    
    if ($forma === 'circulo') {
        echo "A forma escolhida foi: <strong>Círculo</strong><br>";
        for ($i=1; $i <= $quantidade; $i++) { 
        ?>
            <div class="circulo" <?php echo "style='background-color: $cor;'";?>>
            
            <?php echo "$i";?>
            </div>
        <?php
        }
    }elseif ($forma === 'quadrado'){
        echo "A forma escolhida foi: <strong>Quadrado</strong><br>";
        for ($i=1; $i <= $quantidade; $i++) { 
        ?>
            <div class="quadrado" <?php echo "style='background-color: $cor;'";?>>
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