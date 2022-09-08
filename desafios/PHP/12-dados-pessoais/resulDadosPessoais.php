<?php include('cabecalho.php');?>

<?php
    $nome = $_POST['name'] ? $_POST['name'] : "Dado não informado no formulário" ;
    $nasc = $_POST['nasc'] ? $_POST['nasc'] : "Dado não informado no formulário";
    $sexo = $_POST['sexo'];

    switch ($sexo){
        case 'masculino':
            $sexo = "Masculino";
            break;
        case 'feminino':
            $sexo = "Feminino";
            break;
        default:
        $sexo = "Dado não informado no formulário";
        break;
    }
    $pais = $_POST['pais'] ? $_POST['pais'] : "Dado não informado no formulário";

    $anoAtual= date('Y');
    $anoNasc = substr($nasc, -10, 4);

    $idade = $anoAtual - $anoNasc;
?>

<fieldset>
    <legend>Informações recebidas:</legend>
    <label for="">Nome Completo: </label> <?php echo $nome; ?> <br>
    <label for="">Data de Nascimento: </label> <?php echo implode('/',array_reverse(explode('-',$nasc)));?> <br>
    <label for="">Sexo: </label> <?php echo $sexo; ?> <br>
    <label for="">País: </label> <?php echo $pais; ?> <br>
    <label for="">Idade: </label> <?php echo $idade; ?> <br>
</fieldset>

<br><br>

<a class="btn btn-warning" href="FormDadosPessoais.php">Voltar para formulário</a>

<?php include('rodape.php');?>