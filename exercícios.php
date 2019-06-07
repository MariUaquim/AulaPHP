<?php
/////////////////LISTA DE EXERCÍCIOS///////////////
// 2 - FATORIAL
$num = 5;
$result = 1;

for($i= $num;$i>0;$i--){
	$result *= $i; 
}
echo "!$num: $result";
exit;
// 1- MÉDIA  
$notas = [5,5,8];
$sum = 0;

for($i=0;$i<count($notas);$i++){
	$sum += $notas[$i];
}
$media = $sum /count($notas);
echo "Sua média é: $media<br>";
if($media>=6){
	echo "Parabéns, vc está aprovado";
} else{
	echo "Lamento terá que tentar outra vez";
}


?>