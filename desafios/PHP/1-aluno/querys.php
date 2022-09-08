<?php
include('conexao-bd.php');


function insereAluno($conexao, $matricula, $nome, $email, $curso){
    $query = "insert into alunos (matricula,nome,email,curso) VALUES ('{$matricula}','{$nome}','{$email}','{$curso}');";
    return mysqli_query($conexao, $query);
}

function listaAluno($conexao){
    $todosAlunos = []; //criar um array
    $resultado = mysqli_query($conexao, "select * from alunos order by id;"); //query para buscar as informações e guardar numa variável
    while ($aluno=mysqli_fetch_assoc($resultado)){ //
        array_push($todosAlunos, $aluno);//enquanto tiver item na lista, ele vai jogar no array
         //de onde vem a informação e o que está sendo guardado
    }
    return $todosAlunos;
}

function deletaAluno($conexao, $id){
    $query = "delete from alunos where id=$id;";
    return mysqli_query($conexao, $query);
}
