// JavaScript Document
// JavaScript Document
function ConfirmarRegistro(url){
	if (!confirm("Desea eliminar la ponencia ?"))
	{
		return false;
	}else{
		document.location=url;
		return true;	
	}
}