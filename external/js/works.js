$("#skills").select2();


var $el = $('#images'), initPlugin = function() { 
	$el.fileinput({
		uploadUrl: base_url+'ajax/images_work',
		uploadExtraData: {sid:$("#sid").val()},
		allowedFileExtensions: ['jpg', 'png', 'gif'],
		overwriteInitial: false,
		maxFileSize: 1000,
		maxFilesNum: 10,
		showUpload: false,
		fileActionSettings: {
			showUpload: false,
		},
		slugCallback: function (filename) {
			return filename.replace('(', '_').replace(']', '_');
		}
	});
};
initPlugin();
$("#work_form").submit(function(e){
	e.preventDefault();
	var tipo_guardado = $("#tipo_guardado").val();
	if (tipo_guardado == 1) {
		$("#images").fileinput("upload");

		$('#images').on('filebatchuploadcomplete', function(event, data, previewId, index) {
			guardar_formulario();
			event.stopImmediatePropagation();
			$el.fileinput('refresh')
				.off('fileuploaded').on('fileuploaded', function(){});
		});
	}else {
		actualizar_formulario();
	}
});
function guardar_formulario(){
	var datos = $("#work_form").serialize();
	$.ajax({
		url: base_url+"ajax/agregar_trabajo",
		type: "POST",
		dataType: "json",
		data: datos,
		success: function(a) {
			$("#work_form")[0].reset();
			$('#skills').val(null).trigger("change");
			$("#content_table").append('<tr role="row">'
				+'<td>'+a.data[0].id+'</td>'
				+'<td>'+a.data[0].title+'</td>'
				+'<td>'+a.data[0].description+'</td>'
				+'<td>'+a.data[0].ubication+'</td>'
				+'<td>'+a.data[0].skills+'</td>'
				+'<td>'+a.data[0].images+'</td>'
				+'<td>'+a.data[0].city+'</td>'
				+'<td>'+a.data[0].country+'</td>'
				+'<td><center><i class="fa fa-pencil" aria-hidden="true" style="cursor: pointer; cursor: hand;"></i></center></td>'
				+'<td><center><i class="fa fa-trash" aria-hidden="true" style="cursor: pointer; cursor: hand;"></i></center></td>'
				+'</tr>');
			$("#sid").val(parseFloat(a.data[0].images) + 1);
			$(".dataTables_empty").remove();
			a = "";
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	});
}