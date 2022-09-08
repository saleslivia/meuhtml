<?php $titulo = "";
    include('cabecalho.php');?>



<?php
    $operacoes = $_GET['operacoes'] ? $_GET['operacoes'] : 0;
    
    switch ($operacoes){
        case 'soma':
            echo "<form action='operacao.php' method='$_GET'>
            <label for='iSoma'>Gostaria de somar quantos números?</label>
            <input type='number' name='soma' id='iSoma'>
            </form>";
        break;
            ?>
            
            <!-- <form action="soma.php" method="get">
                        <fieldset>
                        <legend>Somando números:</legend>
                            <div class="mb-3">
                                <label for="iNumero1" class="form-label">Escolha o primeiro número?</label>
                                <input type="number" name="numero1" id="iNumero1" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="iNumero2" class="form-label">Escolha o segundo número?</label>
                                <input type="number" name="numero2" id="iNumero2" aria-describedby="helpId" placeholder="">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Iniciar">
                        </fieldset> -->
            </form>
            <?php
            break;
            case 'subtracao':
                ?>
                <form action="subtracao.php" method="get">
                            <fieldset>
                            <legend>Somando números:</legend>
                                <div class="mb-3">
                                    <label for="iNumero1" class="form-label">Escolha o primeiro número?</label>
                                    <input type="number" name="numero1" id="iNumero1" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="iNumero2" class="form-label">Escolha o segundo número?</label>
                                    <input type="number" name="numero2" id="iNumero2" aria-describedby="helpId" placeholder="">
                                </div>
                                <input class="btn btn-primary" type="submit" value="Iniciar">
                            </fieldset>
                    </form>
                <?php
                break;

    }
            /*switch ('$operacoes') {
                case 'soma':
                    $a=3;
                    $b=3;
                    $somas = $a+$b;
                    echo $somas;
                case 'subtracao':
                    $a=5;
                    $b=3;
                    $somas = $a-$b;
                    echo $somas;
             /*?>
                    <form action="soma.php" method="get">
                        <fieldset>
                        <legend>Somando números:</legend>
                            <div class="mb-3">
                                <label for="iQtdeNumero" class="form-label">Gostaria de somar quantos números?</label>
                                <input type="number" name="qtdeNumero" id="iQtdeNumero" aria-describedby="helpId" placeholder="">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Iniciar">
                        </fieldset>
                </form>
            <?php
                break;
                case 'subtracao':
            ?>
                    <form action="subtracao.php" method="get">
                        <fieldset>
                        <legend>Somando números:</legend>
                            <div class="mb-3">
                                <label for="iQtdeNumero" class="form-label">Gostaria de subtrair quantos números?</label>
                                <input type="number" name="qtdeNumero" id="iQtdeNumero" aria-describedby="helpId" placeholder="">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Iniciar">
                        </fieldset>
                </form>
            <?php
                break;
                default:
                    echo "nada";
                    break;
            }*/
            ?>
            
    <br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>