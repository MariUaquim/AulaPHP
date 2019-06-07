<?php
///////////////ESTRUTURA DE CONTROLE/////////////////////////
//IF/ELSE///////////////////////////////////////////////////
/*
	$idade = $_GET['age'];
	$idademaior = 18;
	$crianca = 12;
	$adolescente = 20;
	$adulto = 60;

	if($idade<$crianca){
		echo "Criança<br>";
	}elseif($idade < $adolescente){
		echo "Adolescente<br>";
	}elseif($idade<$adulto){
		echo "Adulto<br>";
	}else{
		echo "Idoso<br>";
	}
///////////////OPERADOR TERNARIO//////////////////////////
	echo ($idade>=$idademaior)?"Maior de idade<br>":"Menor de idade<br>";
*/

//////////////SWITCH CASE/////////////////////////////////

$dia = date("w");

switch ($dia) {
	case 0:
		echo "Domingo";
		break;//para que ele não teste os d+
	case 1:
		echo "Segunda-feira";
		break;
	case 2:
		echo "Terça-feira";
		break;
	case 3:
		echo "Quarta-feira";
		break;
	case 4:
		echo "Quinta-feira";
		break;
	case 5:
		echo "Sexta-feira";
		break;
	default:
		echo "Sábado";
		break;
}




?>