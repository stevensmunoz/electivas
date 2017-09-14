$(document).on('ready', function () {
	$(".inscribirse").on('click', function () {
		if (confirm('Seguro que desea inscribirse a '+$(this).data('materia')+'?')) {
			Inscribirse($(this).data('id'), $(this).data('url'), function (datos) {
				alert(datos.message);
				location.reload(); 
			});
		}else{

		}
	});
});


// Obtener ciudades por el api
function Inscribirse (id_materia, url, callback) {
	$.ajax({
		url: url,
		type: "get",
		data: {
			materia: id_materia
		}
	}).done(function(datos) { 
		callback(datos);
	}) .fail(function( jqxhr, textStatus, error ) { 
		console.log(jqxhr); 
	});
}