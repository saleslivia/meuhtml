<?php $titulo = "";
    include('cabecalho.php');?>

<?php
    $operacoes = $_GET['operacoes'] ? $_GET['operacoes'] : 0;
    
    switch ($operacoes){
        case 'soma':
            echo "<form action='soma.php' method='GET'>
                <label for='iOpcao'>Gostaria de somar quantos números?</label>
                <input type='number' name='opcao' id='iOpcao' min='2' max='10' required>
                <input type='submit' value='Enviar'>
            </form>";
        break;
        case 'subtracao':
            echo "<form action='subtracao.php' method='GET'>
                <label for='iOpcao'>Gostaria de subtrair quantos números?</label>
                <input type='number' name='opcao' id='iOpcao' min='2' max='10' required>
                <input type='submit' value='Enviar'>
            </form>";
        break;
        case 'fatorial':
            echo "<form action='resulFatorial.php' method='GET'>
                <label for='valor'>Informe o número: </label>
                <input type='number' name='valor' id='iValor' min='0' max='15'>
                <br>
                <input class='btn btn-success' type='submit' value='Calcular'/>
            </form>";
        break;
        case 'tabuada':
            echo "<form action='resulTabuada.php' method='GET'>
                <label for='tabuada'>Escolha a tabuada: </label>
                <select lass='form-select' name='tabuada' id='iTabuada' required>
                <option value='' selected='selected' disabled>Escolha um nº:</option>";
                    for ($i=1; $i <=10 ; $i++) { 
                        echo"<option>$i</option> <br>";
                    }
                echo "</select>
                <br><br>
                <input class='btn btn-success' type='submit' value='Calcular'>
                </form>";
        break;
        case 'raiz':
            echo "<form action='resulRaizQuadrada.php' method='get'>
                    <label for='raiz'>Escolha um número</label>
                    <input type='number' name='raiz' id='iRaiz'>
                    <br>
                    <input class='btn btn-success' type='submit' value='Calcular'>
                </form>";
        break;        
        case 'cubo':
            echo "<form action='resulCubo.php' method='get'>
                    <label for='cubo'>Escolha um número</label>
                    <input type='number' name='cubo' id='iCubo'>
                    <br>
                    <input class='btn btn-success' type='submit' value='Calcular'>
                </form>";
        break;
        case 'dobro':
            echo "<form action='resulDobro.php' method='get'>
                    <label for='dobro'>Escolha um número</label>
                    <input type='number' name='dobro' id='iDobro'>
                    <br>
                    <input class='btn btn-success' type='submit' value='Calcular'>
                </form>";
        break;
        case 'primo':
            echo "<form action='resulPrimo.php' method='GET'>
                    <label for='primo'>Escolha um número</label>
                    <input type='number' name='primo' id='iPrimo'>
                    <br>
                    <input class='btn btn-success' type='submit' value='Calcular'>
                </form>";
        break;
    }
    ?>

    <br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>