// JavaScript Document
function ConfirmarRegistro(url){
	if (!confirm("Desea eliminar la publicación ?"))
	{
		return false;
	}else{
		document.location=url;
		return true;	
	}
}