<?php
/////////////////////PRESCEDÊNCIA/////////////////////////////////////////
$result = 10 + 3 / 2; // 11.5
$result = (10 + 3) / 2; // 6.5
$result = (10 + 3) / 2 > 5; //6.5 > 5 => TRUE
$result = (10 + 3) / 2 > 5 && 10 + 3 < 5 ; // => FALSE
var_dump($result);
//echo $result; 
exit;
/////////////////////INCREMENTO///////////////////////////////////////////////////////////////
$i = 10;
echo $i++ . "<br>"; //imprime => 10 imprime e incrementa(+1)
echo $i   . "<br>"; //imprime => 11 imprime
echo ++$i . "<br>"; //imprime => 12 incrementa(+1) e imprime
echo $i-- . "<br>"; //imprime => 12 imprime e decrementa(-1)
echo $i   . "<br>"; //imprime => 11 imprime
echo --$i . "<br>"; //imprime => 10 decrementa(-1) e imprime


exit;
//////////////////////COMPARAÇÃO com NULL//////////////////////////////////////////////////////
//                     ***apenas no PHP 7***
	$nulo1 = null;
	$nulo2 = null;
	$nulo3 = 10;

	echo $nulo1 ?? $nulo2 ?? $nulo3;
	//echo $nulo1
	//se $nulo1 == null então echo $nulo2
	//se $nulo2 == null então echo $nulo3

exit;
/////////////////////////ESPACE CHIP <=> ///////////////////////////////////////////////////////
//                     ***apenas no PHP 7***
	$z = 350;
	$w = 35;

	var_dump($z <=> $w);
	//SE $z > $w ENTÃO retorno = 1
	//SE $z = $w ENTÃO retorno = 0
	//SE $z < $w ENTÃO retorno = -1

exit;
/////////////////////////OPERADORES DE COMPARAÇÃO//////////////////////////////////////////////
	$x = 50;
	$y = 35;
	var_dump($x > $y); 
	var_dump($x < $y);
	var_dump($x == $y);//compara apenas o VALOR ex: 35(INT) == 35.00(FLOAT) => TRUE
	var_dump($x === $y);//compara VALOR e TIPO  ex: 35(INT) === 35.00(FLOAT) => FALSE
	var_dump($x != $y); //compara apenas o VALOR ex: 35(INT) != 35.00(FLOAT) => FALSE
	var_dump($x !== $y);//compara VALOR e TIPO  ex: 35(INT) !== 35.00(FLOAT) => TRUE
	//! == NÃO
	//<= MENOR =
	//>= MAIOR =
exit;
////////////////////////OPERADORES MATEMÁTICOS////////////////////////////////////////////////
	$a = 36;
	$b = 12;

	$soma = $a + $b;
	$subt = $a - $b;
	$mult = $a * $b;
	$divi = $a / $b;
	$rest = $a % $b;
	$expo = $a ** 2; // POTÊNCIA

	echo $soma . "<br>";
	echo $subt . "<br>";
	echo $mult . "<br>";		 
	echo $divi . "<br>";
	echo $rest . "<br>";
	echo $expo;	

exit;
	//ATRIBUIÇÃO
	$valor = 0;
	$valor += 100; 
	$valor -=25;
	$valor *=.1; //10% do valor => valor = valor * 0.1
	echo $valor;
exit;
////////////////////////OPERADORES DE STRING////////////////////////////////////////
	$nome1 = "Mariana "; //variavel + OP. DE ATRIBUIÇÃO + valor
	$nome2 = "Uaquim ";
	$nome = $nome1 . $nome2; //OP. DE CONCATENAÇÃO
	$nome .=  "...está aprendendo";//concatena e atribui
	echo $nome;
?>