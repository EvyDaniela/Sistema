// JavaScript Document
function ConfirmarRegistro(url){
	if (!confirm("Desea eliminar la tesis ?"))
	{
		return false;
	}else{
		document.location=url;
		return true;	
	}
}