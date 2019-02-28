<?php
$msg = $_POST['txtmsg'];
$src = $_POST['txtsrc'];
$line = $_POST['txtlineNo'];
$error = $_POST['txterror'];

$arquivo = 'onerror.txt';

if(is_writable($arquivo)){

	$criar = fopen($arquivo, "a+");
	if($msg != "" && $src != "" && $line != "" && $error != ""){ 
	
	$escreve = fwrite($criar, "Mensagem : ($msg) / URL : ($src) / Linha : ($line) / Objeto Error : ($error) \r\n"); 

	fclose($criar); 
	echo "deu certo"; 
	}
}
?>