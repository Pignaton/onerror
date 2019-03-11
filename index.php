<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex, nofollow" />
 	<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/onerror.js"></script>
	<title> Error - Javascript </title>
	<script type="text/javascript">
	/*window.onerror = function(msg, src, lineNo, colNo, err){
		document.getElementById("msga").innerHTML = "Mensagem de Erro\n\n"
	   +"Mensagem: "+msg+"\n"
	   +"URL: "+src+"\n"
	   +"linha: "+lineNo+"\n"
	   +"Coluna: "+colNo+"\n";
	   /*+"Erro: "+error.stack+"\n";
	}*/
	
	/*var teste = null;
	alert(teste.teste2);  erro*/
	$(document).ready(function () {
	$( "#delete" ).click(function( event ) {
		var teste = null;
			alert(teste.teste2);// erro
		});
		});
	</script>
</head>
<body>
<input type="submit" value="teste" id="delete"/>
</body>
</html>
