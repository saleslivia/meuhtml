<?php
include('conexao-bd.php');

    function insereProduto($con, $nome, $preco){
            $query = "insert into produtos (nome,preco) values ('{$nome}', '{$preco}');";
            return mysqli_query($con, $query);
        }