

$("#home").click(function(){
	cargarContenido("/app/usuarios");
});



function cargarContenido(pagina) {
	$("#content-sicgom").load(pagina);
}