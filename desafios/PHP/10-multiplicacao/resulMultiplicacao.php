<?PHP include('cabecalho.php');?>

<?PHP
$numero = $_GET['numero'] ? $_GET['numero'] : 0;

?>

<fieldset>
    <legend>Resultado da Multiplicação</legend>
    <?php 
        for ($i=0; $i<=10; $i++){
            echo "$numero X $i = " . $numero * $i . "<br>";
        }
    ?>
</fieldset>
<br>
<?php /*echo "O número informado foi $numero <br>";*/ ?>
<br>
<br>
<a class="btn btn-outline-primary" href="multiplicacao.php">Voltar</a>


<?PHP include('rodape.php');?>