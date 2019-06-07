<?php
////////////////////////TIPO BÁSICOS//////////////////////////////////
$nome = "Mariana";//string
$nome2 = 'Geo'; //string
$ano = 1991;//inteiro
$salario = 12470.90;//float = ponto flutuante
$bloqueado = false;//booleano
///////////////////////TIPOS COMPOSTOS//////////////////////////////////

$lista = array("frutas", 234,'remedio voinha',45); //vetor , pode ter TIPOS DIFERENTES
$dt = new DateTime(); //objeto
//echo $lista[3];
//echo var_dump($dt);
//////////////////////TIPOS ESPECIAIS//////////////////////////////////

$arquivo = fopen("index.php", "r"); //resource
$nulo = null;
$vazio = "";
echo var_dump($nulo);
echo "<br>";
echo var_dump($vazio);
//echo var_dump($arquivo);

//////////////////////////////////////////////////////////////////////

exit;
var_dump($nome);//imprime o TIPO, TAMANHO, CONTEUDO da variável
echo "<br>";
echo $nome . " e " . $nome2 . " estão namorando s2";//concatenação

exit;// PARAR a execução aqui

unset($nome,$nome2);// LIMPA variáveis, DEIXA de EXISTIR, TIRA da memória 
if( isset($nome)){ // isset = verifica SE a variável EXISTE
	var_dump($nome);
}else{
	echo "a variável não existe";
}
exit;
////////////////////////////VARIÁVEIS SUPER GLOBAIS//////////////////////////////////////////////////////////////
	$a = (int)$_GET['a'];//pega da URL
	$b = (int)$_GET['b'];

	$ip = $_SERVER["REMOTE_ADDR"];//$_SERVER pega informação do AMBIENTE (servidor + usuário)
	$script = $_SERVER["SCRIPT_NAME"]; //pega o path do arquivo

////////////////////////////VARIÁVEIS GLOBAIS////////////////////////////////////////////////////////////////////////////////////
function teste(){
	global $script;//usamos a palavra reservada GLOBAL dentro da função
	echo $script;
}
teste();

?>