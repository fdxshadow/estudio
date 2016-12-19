$(document).ready(function () {
	$("#success").click(function(){
		var id=$(this).val();
		var nombre = $("NombreE").val();
		var genero = $("GeneroE").val();
		var sucursal=$("#SucursalE").val();

		$.post("welcome/editar/",{id:id,nombre:nombre,genero:genero,sucursal:sucursal});

			//document.location="estudio";	
	});
})