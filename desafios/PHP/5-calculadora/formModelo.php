<?php $titulo = "";
    include('cabecalho.php');?>
<!-- FATORIAL -->
<!-- <form action="resulFatorial.php" method="get">
    <fieldset>
        <legend>Fatorial</legend>
            <label for="valor">Informe o número: </label>
            <input type="number" name="valor" id="iValor" min="0" max="15">
            <br>
            <input class="btn btn-success" type="submit" value="Calcular"/>
    </fieldset>
</form> 

//TABUADA
<form action="resulTabuada.php" method="get">
    <label for='tabuada'>Escolha a tabuada: </label>
    <select lass='form-select' name='tabuada' id='iTabuada' required>
        <option value='' selected='selected' disabled>Escolha um número:</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='8'>8</option>
        <option value='7'>7</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
    </select>
    <br>
    <input class='btn btn-success' type='submit' value='Calcular'>
</form>

//TABUADA 
<form action='resulRaizQuadrada.php' method='get'>
    <label for='raiz'>Escolha um número</label>
    <input type='number' name='raiz' id='iRaiz'>
    <br>
    <input class='btn btn-success' type='submit' value='Calcular'>
</form>
//CUBO
<form action='resulCubo.php' method='get'>
    <label for='cubo'>Escolha um número</label>
    <input type='number' name='cubo' id='iCubo'>
    <br>
    <input class='btn btn-success' type='submit' value='Calcular'>
</form>
//DOBRO
<form action='resulDobro.php' method='get'>
    <label for='dobro'>Escolha um número</label>
    <input type='number' name='dobro' id='iDobro'>
    <br>
    <input class='btn btn-success' type='submit' value='Calcular'>
</form>
//CONTANDO COM INCREMENTO DE 5 EM 5

<?php
    for($i=1; $i<=100; $i+=5){
        echo "$i ";
    }
?>
//Tabuada com for para option
<form action="">
    <select name='num' id=''>
        <?php
            for ($i=1; $i <=10 ; $i++) { 
                echo"<option>$i</option>";
            }
        ?>
    </select>
</form>
//NUMERO PRIMO
<form action='resulPrimo.php' method='GET'>
    <label for='primo'>Escolha um número</label>
    <input type='number' name='primo' id='iPrimo'>
    <br>
    <input class='btn btn-success' type='submit' value='Calcular'>
</form>
//FUNÇÃO SOMA
<?php
    function soma($a, $b){
        $total = $a + $b;
        return $total;
    }
    $a=10; 
    $b=15;
    $resul= soma($a, $b);
    echo "A soma de $a + $b = $resul";
?>
//FUNÇÃO SOMA COM ARRAY-->
<?php
      function somar(){
        $p = func_get_args(); //pega todos os valores que coloca dentro de um vetor p.
        $tot = func_num_args(); //retona o número de argumentos passados (neste caso, 3).
        $s=0;
        for ($i=0; $i < $tot; $i++) { 
            $s += $p[$i];
        }
        return $s;
      }
      $r= somar(3,5,2);
      echo "A soma dos valores é $r";
?>

<br><br>
<a class="btn btn-outline-secondary" href="index.php">Home</a>
<?php include('rodape.php');?>