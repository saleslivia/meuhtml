<?php include('cabecalho.php');?>
    <form action="cadastrar-aluno.php" method="get">
        <h1>Cadatrar Aluno</h1>
        <div class="row mb-3 d-flex justify-content-center">
            <label for="iMatricula" class="col-form-label col-md-3">Matrícula do aluno:</label>
            <div class="col-md-5">
                <input type="text"class="form-control" name="matriculaAluno" id="iMatricula">
            </div>
        </div>
        <div class="row mb-3 d-flex justify-content-center">
            <label for="iNome" class="col-form-label col-md-3">Nome do aluno:</label>
            <div class="col-md-5">
                <input type="text"class="form-control" name="nomeAluno" id="iNome">
            </div>
        </div>
        <div class="row mb-3 d-flex justify-content-center">
            <label for="iEmail" class="col-form-label col-md-3">E-mail do aluno:</label>
            <div class="col-md-5">
                <input type="email"class="form-control" name="emailAluno" id="iEmail">
            </div>
        </div>
        <div class="row mb-3 d-flex justify-content-center">
            <label for="iCurso" class="col-form-label col-md-3">Curso:</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="cursoAluno" id="icurso">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
<?php include('rodape.php');?>