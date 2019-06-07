<?php
/////////////VETOR////////////////////////////////////////

$frutas = array("laranja","maçã","melancia", "kaki");

print_r($frutas);
echo "<br>";
/////////////MATRIZ//////////////////////////////////////

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix"; 
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion"; 
$carros[1][3] = "Eco Sport";

echo $carros[0][3]. "<br>";
echo end($carros[1]); // traga o ÚLTIMO elemento dessa linha
///////////////////FUNÇÕES DE ARRAY//////////////////////////////////
echo "<br><br>";

$pessoas = array();
array_push($pessoas, array(
	'nome' => 'Maistela',
	'idade'=> 57));
array_push($pessoas, array(
	'nome' => 'João',
	'idade'=> 60));
array_push($pessoas, array(
	'nome' => 'Mariana',
	'idade'=> 27));

echo $pessoas[0]['nome']. "<br>";//Maristela
echo $pessoas[1]['nome']. "<br>";//João
echo $pessoas[2]['nome']. "<br>";//Mariana
echo "<hr>";


foreach ($pessoas as $pessoa) {
	foreach ($pessoa as $key => $value) {
		echo "$key : $value". "<br>";
	}
	echo "<hr>";
}



?>