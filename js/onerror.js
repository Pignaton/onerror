window.onerror = function(msg, src, lineNo, colNo, error){
//document.getElementById("msg").innerHTML = //"msg: "+msg+"\n"//+"src: "+src+"\n"//+"lineNo: "+lineNo+"\n";//+"colNo: "+colNo+"\n"//+"stack: "+err.stack+"\n";

$(document).ready(function () {

var txtsrc = src; /*A mensagem associada ao erro*/		
var txtlineNo = lineNo; /* O número da linha */
var txtmsg = msg; /* A URL do script ou documento associado ao erro */
var txterror = error; /* O objeto Error associado a este erro */

	$.ajax({
		url: 'onerror.php',
		type:'POST',
		data: {'txtmsg': txtmsg,
			  'txtsrc': txtsrc,
			  'txtlineNo': txtlineNo,
			  'txterror': txterror
		},
		cache : false,
		//processData: false,
		success:function(data){
			alert(data);
		},
		error:function(data){
			alert("não foi");
		}
	});
});
}