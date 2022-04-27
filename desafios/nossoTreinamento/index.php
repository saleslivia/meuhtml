<?PHP
    include('cabecalho.php');
?>
            <form action="" method="get">
                <div>
                    <label for="iNome">Nome: </label>
                    <input type="text" name="nome" id="iNome">
                </div>
                <br>
                <div>
                    <label for="iData">Data de nascimento: </label>
                    <input type="date" name="data" id="iData">
                </div>
                <br>
                <div>
                    <label for="iEmail">E-mail: </label>
                    <input type="email" name="email" id="iemail">
                </div>
                <br>
                <div>
                    <label for="sexo">Sexo:</label>
                    <br>
                    <input type="radio" name="genero" id="iFeminino">
                    <label for="iFeminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="iMasculino">
                    <label for="iMasculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="iNaoDeclarado">
                    <label for="iNaoDeclarado">Não Declarado</label>
                </div>
                <br>
                <button type="submit" id="iEnviar">Enviar</button>
            </form>
<?PHP
    include('rodape.php');
?>
