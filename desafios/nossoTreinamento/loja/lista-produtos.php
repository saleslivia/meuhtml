<?php include('cabecalho.php');
    include('querys.php'); ?>

<?php 

/*$resultado = mysqli_query($conexao, "select * from produtos;");

//$produto = mysqli_fetch_assoc($resultado)

while ($produto = mysqli_fetch_assoc($resultado)) {
    echo "<li>O ID do produto é: " . $produto['id'] . "<br></li>";
    echo "O nome do produto é: " . $produto['nome'] . "<br>";
    echo "O Preço do produto é: " . $produto['preco'] . "<br><br>";
}*/


$produtos = listarProdutos($conexao);
// var_dump($produtos);
?>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Remover</th>
        </tr>
    </thead>
    <?php
    foreach($produtos as $produto){
    ?>
        <tr>
            <td><?= $produto['id']; ?></td>
            <td><?= $produto['nome']; ?></td>
            <td><?= $produto['preco']; ?></td>
            <td><a class="btn btn-danger" href="deletar-produto.php?id=<?=$produto['id'];?>&nome=<?=$produto['nome'];?>">Deletar</a></td>
        </tr> 
    <?php  
    }
    ?>
</table>

<?php include('rodape.php');?>