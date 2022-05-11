<?php include('cabecalho.php');?>
    <fieldset>
        <legend>De acordo com a sua Escolha:</legend>
        <br>
        <?php
            $estados = $_GET['estados'] ? $_GET['estados'] : "";

            switch ($estados) {
                case 'SP':
                case 'MG':
                case 'RJ':
                case 'ES':
                    echo "Você é da <strong>Região Sudeste</strong>.";
                break;

                case 'MA':
                case 'CE':
                case 'PI':
                case 'RN':
                case 'PB':
                case 'PE':
                case 'AL':
                case 'SE':
                case 'BA':
                    echo "Você é da <strong>Região Nordeste</strong>.";
                break;

                case 'RO':
                case 'AC':
                case 'AM':
                case 'RR':
                case 'AP':
                case 'PA':
                case 'TO':
                    echo "Você é da <strong>Região Norte</strong>.";
                break;

                case 'PR':
                case 'SC':
                case 'RS':
                    echo "Você é da <strong>Região Sul</strong>.";
                break;

                case 'MT':
                case 'GO':
                case 'MS':
                case 'DF':
                    switch ($estados) {
                        case 'DF':
                            echo "Você é do <strong>Distrito Federal</strong>.";
                        break;
                        default:                      
                            echo "Você é da <strong>Região Centro-Oeste</strong>.";
                        }
                break;
            }    
           //echo "$estados";
        ?>
    </fieldset>
    <br><br>
    <a class="btn btn-success" href="regioes.php">Voltar</a>
<?php include('rodape.php');?>