<?php
$msg = $_POST['txtmsg'];
$src = $_POST['txtsrc'];
$line = $_POST['txtlineNo'];
$error = $_POST['txterror'];

date_default_timezone_set( 'America/Sao_Paulo' );
$date = date('Y-m-d H:i:s');

$arquivo = 'onerror.txt';

$criar = fopen($arquivo, "a+");
if($msg != "" && $src != "" && $line != "" && $error != "")	
	$escreve = fwrite($criar, "$date - Mensagem : ($msg) -  URL : ($src) - Linha : ($line) -  Objeto Error : ($error) \r\n"); 

fclose($criar); 
echo "deu certo"; 

?>