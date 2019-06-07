<?php
/*
///////////////ESTRUTURAS DE REPETIÇÃO//////////////////////
//FOR
//EX 1
	$soma = 0;
	for($i=0;$i<100;$i+=5){
		//imprime número de 0 a 100 pulando de 5 em 5
		if($i>20&&$i<80)continue;
		//se o número for >20 e <80 ele pula pro proximo 
		if($i===90)
			break;//se numero =90 sai do for 
		echo "$i<br>";
	}
//EX 2
	$year = date("Y");//4 digitos(ex: 2019)
	// $year = date("y") //=> 2 digitos (ex: 19)

	echo "<br><select>";
	for($i = $year; $i > $year-50; $i--){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo "</select><br>";
////////////////////////////////////////////////////////////////////////////////
//FOREACH
//EX 1	
	echo "<br>";
	$meses = array(
			"Janeiro","Fevereiro","Março",
			"Abril","Maio","Junho",
			"Julho","Agosto","Setembro",
			"Outubro","Novembro","Dezembro");

	foreach ($meses as $index => $mes) {
		echo "index: $index<br>";
		echo "O mês é: $mes<br><br>";
	}
//EX 2	
?>	
	<form><!--por default é GET-->
		<input type= "text" name="nome" ></input>
		<input type= "date" name="nascimento"></input>
		<input type= "submit" name="submeter"></input>
	</form>
<?php

	if(isset($_GET)){//verifica se o vetor $_get não é null
		foreach ($_GET as $key => $value) {
			echo "$key: $value<br>"; // aqui o key é o que ele traz em nome
			echo "<hr>";             // value é o que foi preenchido
		}

	}
	*/
/////////////////////////////////////////////////////////////////////////////////	
//WHILE
	$condicao = true;
	while($condicao){//condição VERDADEIRA executa
		$num = rand(1,10);// função randômica
		if($num === 3){
			echo "TRÊS". "<br>";
			$condicao = false;
			continue;//já pula para o prox, 
					//mas como não passa na condição sai do laço de repetição

		}
		echo "numero sorteado: $num<br>";
	}
//DO/WHILE
	$tot = 55;
	do{
		$tot *= 0.9;
		echo "valor total: $tot<br>";

	}while($tot > 139 );//


?>