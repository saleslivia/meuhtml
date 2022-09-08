<?php $titulo = "concatenação e decl. de variável";
    include('cabecalho.php');?>

<form action="resulFormataTexto.php" method="get">
    <fieldset>
        <legend>FORMATA TEXTO:</legend>
        <div class="mb-3 row">
            <label class="form-check-label col-3" for="iTexto">Digite o texto:</label>
            <div class="col-9">
                <input class="form-control" type="text" name="texto" id="iTexto" maxlength="120" size="60">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-sm-3" for="iTamanho">Informe o tamanho:</label>
            <div class="col-sm-2">
                <select class="form-select" name="tamanho" id="iTamanho">
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="72">72</option>
                    <option value="150">150</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="form-label col-3" for="iCor">Informe a cor:</label>
            <div class="col-9">
                <input class="form-control form-control-color" type="color" name="cor" id="iCor">
            </div>
        </div>
        <div class="row">
            <label for="iAlinhamento">Informe o alinhamento:</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alinhamento" id="iEsquerda" value="left" checked>
            <label for="iEsquerda">Alinnhar à Esquerda</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alinhamento" id="iDireita" value="right">
            <label for="iDireita">Alinnhar à Direita</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alinhamento" id="iCenter" value="center">
            <label for="iCenter">Centralizar</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alinhamento" id="iJustificar" value="justify">
            <label for="iJustificar">Justificar</label>
        </div>

        <br><br>

        <label for="iDecoracao">Decoração do Texto:</label>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="negrito" id="iBold" value="bold">
            <label class="form-check-label" for="iBold">Negrito</label>
        </div>  
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="italico" id="iItalico" value="italic"> 
            <label class="form-check-label" for="iItalico">Italico</label>
        </div> 
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="sublinhado" id="iSublinhado" value="underline">
            <label class="form-check-label" for="iSublinhado">Sublinhado</label>
        </div> 

    </fieldset>
    <br>
    <input class="btn btn-success" type="submit" value="Enviar">
</form>

<?php include('rodape.php');?>