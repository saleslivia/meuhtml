<?php
include('conexao-bd.php');

    function insereProduto($con, $nome, $preco){
            $query = "insert into produtos (nome,preco) values ('{$nome}', '{$preco}');";
            return mysqli_query($con, $query);
        }
    
    function deletaProduto($conexao, $id){
        $query="delete from produtos where id=$id;";
        return mysqli_query($conexao, $query);
    }

    function listarProdutos($conexao){
        $todosProdutos = [];
        $resultado = mysqli_query($conexao, "select * from produtos order by id;");
        while ($produto = mysqli_fetch_assoc($resultado)) {
            array_push($todosProdutos, $produto);
        }
        return $todosProdutos;
    }