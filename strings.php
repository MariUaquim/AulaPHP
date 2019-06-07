<?php

/////////////////STRING/////////////////////////////////////
$str = "meu nome é";
$nome = "mariana";
$nome2 = "uaquim";

//interpolação de variável
echo "$str $nome $nome2<br>"; // não dá pra fazer issocom '' aspas simples
// meu nome é mariana uaquim
///////////////FUNÇÕES EXIBIÇÃO/////////////////////////////////////
echo strtoupper($nome)."<br>"; // uppercase
echo strtolower($nome)."<br>"; // lowercase
echo ucwords("$nome $nome2")."<br>"; //camelcase
echo ucfirst("$nome $nome2")."<br>"; //upper apenas na primeira letra da primeira palavra

$str = str_replace("meu ", "", $str);
$str = str_replace(" é", ": ", $str);
echo "$str $nome $nome2<br>";
// nome: mariana uaquim
///////////////FUNÇÕES DE MANIPULAÇÃO/////////////////////////////
$frase = "O rato roeu a roupa do rei de Roma";

$palavra = "rei";

$index = strpos($frase, $palavra); // == ctrl + f; POSIÇÃO DO 1º ELEMENTO DA PALAVRA
//index == 23
$substr = substr($frase, 0, $index); // O QUE VEM ANTES DA PALAVRA = pega a substring que começa em 0 e vai até $index
//"o rato roeu a roupa do "
$substr = substr($frase, $index); //A PARTIR DA PALAVRA = pega de index até o final da frase
//"rei de Roma"
$substr = substr($frase, $index + strlen($palavra)); //EXCLUIR A PALAVRA = soma a posição da palavra (23) mais o TAMANHO da palavra 
//"de Roma"
echo $substr;


?>

