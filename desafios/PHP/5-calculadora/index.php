<?php $titulo = "Calculadora";
    include('cabecalho.php');?>

    <form action="form_calculadora.php" method="get">
        <fieldset>
            <legend>Calculadora [em construção]</legend>
            <label for="iOperacoes">Escolha uma operação:</label>
            <?php $operacao = isset($_GET['operacoes'])? $_GET['operacoes'] : ""; ?>
            <select name="operacoes" id="iOperacoes"  required>
                <option value="" selected="selected" disabled>Escolha uma opção:</option>
                <option <?php echo $operacao == "soma" ? "selected" : ""; ?> value="soma">Soma</option>
                <option <?php echo $operacao == "subtracao" ? "selected" : ""; ?> value="subtracao">Subtração</option>
                <option value="multiplicacao" disabled>Multiplicação</option>
                <option value="divisao" disabled>Divisão</option>
                <option value="dobro">Dobro</option>
                <option value="cubo">Cubo</option>
                <option value="raiz">Raiz quadrada</option>
                <option value="media" disabled>Média</option>
                <option value="resto" disabled>Resto da Divisão</option>
                <option value="parouimpar" disabled>Par ou impar</option>
                <option value="fatorial">Fatorial</option>
                <option value="tabuada">Tabuada</option>
                <option value="primo">Primo</option>
            </select>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Escolher">
        </fieldset>
    </form>
    
<?php include('rodape.php');?>