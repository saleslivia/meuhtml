<?PHP
    include('cabecalho.php');
?>
            <div class="d-flex justify-content-center">
                <form action="bemVindo.php" method="POST">
                    <div class="mb-3">
                        <label for="iUsuario">Usuário: </label>
                        <input type="text" name="usuario" id="iUsuario" class="form-control">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="iSenha">Senha: </label>
                        <input type="password" name="senha" id="iSenha" class="form-control">
                    </div>
                    <br>
                    <button type="submit" id="iEnviar" class="btn btn-primary">ENTRAR</button>
                </form>
            </div>
<?PHP
    include('rodape.php');
?>
