<?php $titulo = "Contador com incremento e decremento";
     include ('cabecalho.php');
     
/* 
    $i=1;
    while ($i <= 10) {
        echo "$i";
       if ($i<10){
        echo "-";
       }else{
        echo ".";
       }
       $i+=2;
    }
------------------
     $i=1;
     while ($i<=10){
        echo "<label for='t$i'>Número $i: </label>
        <input type='number' name='t$i' id='$i' max='1' min='10'> </br>";
        $i++;
     }
------------------
*/
     
     ?>
    <form action="resulContador_v3.php" method="get">
        <fieldset>
            <legend>Contagem de números</legend>
            <label for="num1">Inicio: </label>
            <input type="number" name="num1" id="iNum1" required>
            <br><br>
            <label for="num2">Final: </label>
            <input type="number" name="num2" id="iNum2" required>
            <br><br>
            <label for="inc">Incremento:</label>
            <select name="inc" id="iInc" required>
                <option value="" selected="selected" disabled>Escolha:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br><br>
        </fieldset>
        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
    
<?php include ('rodape.php');?>