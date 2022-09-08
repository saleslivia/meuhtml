<?php $titulo = "Cálculo de consumo de combustível";
     include ('cabecalho.php');
   
     ?>
    <div class="painel">
        <h2>Instruções</h2>
        <div class="conteudo-painel">
            <p>
                Esta aplicação tem como finalidade demonstrar os valores que
                serão gastos com combustível durante uma viagem, com base no
                consumo do seu veículo, e com a distância determinada por você!
            </p>
            <p>
                Os combustíveis disponíveis para este cálculo são:
            </p>
            <ul>
                <li><b>Álcool</b></li>
                <li><b>Díesel</b></li>
                <li><b>Gasolina</b></li>
            </ul>
        </div>
    </div>
    <div>
        <form action="resulConsumo.php" method="post">
            <fieldset>
                <legend><h2>Cálculo do valor (R$) do consumo</h2></legend>
                <label for="distancia">Distância em Km a ser percorrida</label>
                <input type="number" name="distancia" id="iDistancia" required>
                <br><br>
                <label for="consumo">Consumo de combustível do veículo (Km/l)</label>
                <input type="number" name="consumo" id="iConsumo" required>
                <br><br>
                <button class="btn btn-primary" type="submit">Calcular</button>
            </fieldset>
            
        </form>
    </div>
    
</body>
</html>