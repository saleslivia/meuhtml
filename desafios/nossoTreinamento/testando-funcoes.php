<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando fucções</title>
</head>
<body>

    <?php
        //Função printf();
        /*$prod="leite";
        $preço=4.5;
        echo "O leite custa $preço";
        printf ("O %s está custando R$ %.2F", $prod, $preço);

        //1- Função print_r();
        $x[0]=4;
        $x[1]=3;
        $x[2]=8;
        print_r($x);

        //2- Função print_r(); com array
        $y = array(3,4,6,9,4,5,1);
        //print_r($y);
        var-dump($y)

        //3- Função wordwrap();
        $txt = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore amet in praesentium animi impedit dolorum saepe atque debitis numquam culpa dignissimos sint, esse autem, consequuntur tempore quia ratione iure voluptatem.";
	    $res = wordwrap($txt,200, "<br>\n", false);
        echo $res;

        //4- Função srtlen();
        $txt = "Este é um exemplo de string a ser contada";
		$tamanho = strlen($txt);
        echo $tamanho;

        //5,6 e 7- Função trim();
        $txt = "   Este é um exemplo de string a ser contada   ";
		$tamanho = strlen($txt); //48
        $novo = trim($txt); //ltrim ou rtrim
        $tamanho = strlen($novo); //42
        echo $tamanho;

        8- Função str_word_count(); Conta a quantidade de palavras dentro de uma string. 
        $txt = "Este é um exemplo de string a ser contada";
		$tamanho = str_word_count($txt, 0); //1 e 2 geram um vetor com a posição das palavras
        //print_r($tamanho); //para exibir o vetor
        echo $tamanho;

        //9- explode(); é uma versão mais recente da função str_word_count(). Ela procura pelos espaços (" ") e quebra em vetor.
        $site = "Curso em Vídeo";
		$vetor = explode(" ", $site);
        print_r($vetor);

        //10- Função str_split(); quebra em letras
        $nome = "Maria";
		$vetor = str_split($nome);
        print_r($vetor);

        //11- explode(); É parecida com a função explode();, só que ela junta os vetores.
		$vetor [0] = "Curso";
        $vetor [1] = "em";
        $vetor [2] = "Vídeo";
        $texto = implode(" ", $vetor); //podemos usar também join no lugar de implode.
        print($texto);

        //12- chr(); mostra o caracter de acordo com a posição na tabela ASC.
        $letra = chr(76);
        echo " A letra na posição 76 é a $letra."

        //13- ord(); É o contrário da função chr(); ela mostra o código de acordo com a letra.
        $letra = "L";
		$cod = ord($letra);
        print "A letra $letra tem o código $cod."
        
        //14- strtolower(); Deixa todas a letras minúsculas
        $nome = "Livia Sales";
        $nome2 = strtolower($nome);
        echo "Seu nome é: $nome2";

        //15- strtoupper(); Deixa todas a letras maiúsculas
        $nome = "Livia Sales";
        echo ("Seu nome é: " . strtoupper($nome));

        //16- ucfirt(); Deixa a primeira letra maiúscula, as demais permanecem como estão.
        $nome = "liviA saLEs <br>";
        print ("Seu nome é: " . ucfirst($nome));
        print ("Seu nome é: " . ucfirst(strtolower($nome)));//pode ser usada em conjunto

        //17- ucwords(); Deixa a primeira letra de cada palavra maiúscula, as demais permanecem como estão.
        $nome = "liviA saLEs <br>";
        print ("Seu nome é: " . ucwords($nome));
        print ("Seu nome é: " . ucwords(strtolower($nome)));//pode ser usada em conjunto

        //18- strrev(); mostra a string ao inverso (de trás para frente).
        $nome = "liviA saLEs";
        print strrev($nome);

        //19- strpos(); busca uma determinada parte dentro de uma string (tem diferença entre maiúscula e minúscula.
        $frase = "Estou aprendendo PHP!";
        $pos = strpos($frase,"PHP");
        echo "A string foi encontrada na posição $pos.";

        //20- stripos(); busca uma determinada parte dentro de uma string (não tem diferença entre maiúscula e minúscula, pois os 'i' é de ignore).
        $frase = "Estou aprendendo PHP!";
        $pos = stripos($frase,"php");
        echo "A string foi encontrada na posição $pos.";

        //21- substr_count(); conta quantas vezes uma string aparece numa frase.
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP do Guanhabara!";
        $cont = substr_count($frase,"PHP");
        print ("PHP foi encontrado $cont vezes.")

        //22- substr(); Pode ser usada com diversos parâmetros.
        $site = "Curso em Vídeo";
        $sub = substr($site, 0,5);//se colocar apenas um valor, ele pega dalí para frente(tudo) se colocar valor negativo, ele pega as últimas letras da string, de acordo com o número informado.
        echo $sub;*/

        //23- str_pad(); faz uma string caber dentro de um determinado espaço. (não deu bom!)
        $nome = "Léo";
        $novoNome = str_pad($nome, 30, " ", STR_PAD_BOTH);
        print ("Meu professor $novoNome é inteligente!");

        /*//24- str_repeat(); Repete a string a quantidade de vezes informada no parâmetro.
        $txt = str_repeat("Php <br>", 5);
        echo $txt;
        print(str_repeat("-", 20));

        //25- str_replace(); Substitui uma string por outra.
        $frase = "Eu gosto de estudar PHP";
        $novaFrase = str_replace("PHP", "JavaScript", $frase); //usando o 'i', ele ignora a diferença de maiúsculas e minúsculas.
        echo $novaFrase;*/

    ?>

</body>
</html>




