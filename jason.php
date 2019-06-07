<?php

$pessoas = array();
array_push($pessoas, array(
	'nome' => 'Maistela',
	'idade'=> 57));
array_push($pessoas, array(
	'nome' => 'Joao',
	'idade'=> 60));
array_push($pessoas, array(
	'nome' => 'Mariana',
	'idade'=> 27));
/////////////JSON////////////////////////////////////////////

echo json_encode($pessoas);// de ARRAY => JSON

//tem problema com acentuação -> precisa estar em UTF-8
$json = '[{"nome":"Maistela","idade":57},{"nome":"Joao","idade":60},{"nome":"Mariana","idade":27}]';
$data = json_decode($json, true); //de JSON => ARRAY
// json_decode($json, true); => vetor de VETOR
//json_decode($json); => vetor de OBJETO
var_dump($data);
?>