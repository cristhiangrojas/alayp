function editar_skill(id_skill) {
	$("#id_skill").val(id_skill);
	$("#titulo").val($("#button_"+id_skill).html());
	$("#button").html('Edit');
	$("#type").val(2);
}
function elimiar_skill(id_skill) {
	$("#idSkill").val(id_skill);
}

function validateForm() {
	$("#formulario").submit(function(e) {
		e.preventDefault();
		var type = $("#type").val();
		if (type == 1) {
			insertar_dato()
		}else if(type == 2) {
			actualizar_dato();
		}
	})

	$("#formularioEl").submit(function(e) {
		e.preventDefault();
		var datos = $( "#formularioEl" ).serialize();
		$.ajax({
			url: base_url+"ajax/eliminar_skill",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function(a) {
				// a['data'].id
				$("#"+a['data'].id).remove();
				$("#cerrar_modal").trigger('click');
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
		
	})
}
function insertar_dato() {
	var datos = $( "#formulario" ).serialize();
	var skill = $("#titulo").val();
	if (skill != "") {
		$.ajax({
			url: base_url+"ajax/agregar_skill",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function (a) {
				if ($("#zero")) {
					$("#zero").remove();
				}
				// a.data[0].title
				$("#titulo").val("");
				$("#insercciones").append("&nbsp;<div class='btn-group' id='"+a.data[0].id+"'><button type='button' class='btn btn-primary' id='button_"+a.data[0].id+"'>"+a.data[0].title+"</button><button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span class='caret'></span><span class='sr-only'>Toggle Dropdown</span></button><ul class='dropdown-menu'><li><a id='edit_"+a.data[0].id+"' onclick="+"editar_skill('"+a.data[0].id+"');"+">Edit</a></li><li><a href='#modal-delete' data-toggle='modal' onclick="+"elimiar_skill('"+a.data[0].id+"');"+">Delete</a></li></ul></div>");
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
	}
}
function actualizar_dato() {
	var datos = $("#formulario").serialize();
	var skill = $("#titulo").val();
	if (skill != "") {
		$.ajax({
			url: base_url+"ajax/editar_skill",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function(a) {
				$("#button_"+a.data[0].id).html(a.data[0].title);
				$("#titulo").val('');
				$("#button").html('Add');
				$("#type").val(1);
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
	}
}
function validateFormInterest() {
	$("#formulario").submit(function(e) {
		e.preventDefault();
		var type = $("#type").val();
		if (type == 1) {
			insertar_dato_interest()
		}else if(type == 2) {
			actualizar_dato_interest();
		}
	})
	$("#formularioEl").submit(function(e) {
		e.preventDefault();
		var datos = $( "#formularioEl" ).serialize();
		$.ajax({
			url: base_url+"ajax/eliminar_interest",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function(a) {
				// a['data'].id
				$("#"+a['data'].id).remove();
				$("#cerrar_modal").trigger('click');
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
		
	})
}
function insertar_dato_interest() {
	var datos = $( "#formulario" ).serialize();
	var skill = $("#titulo").val();
	if (skill != "") {
		$.ajax({
			url: base_url+"ajax/agregar_interest",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function (a) {
				if ($("#zero")) {
					$("#zero").remove();
				}
				$("#titulo").val("");
				$("#insercciones").append("&nbsp;<div class='btn-group' id='"+a.data[0].id+"'><button type='button' class='btn btn-primary' id='button_"+a.data[0].id+"'>"+a.data[0].title+"</button><button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span class='caret'></span><span class='sr-only'>Toggle Dropdown</span></button><ul class='dropdown-menu'><li><a id='edit_"+a.data[0].id+"' onclick="+"editar_skill('"+a.data[0].id+"');"+">Edit</a></li><li><a href='#modal-delete' data-toggle='modal' onclick="+"elimiar_skill('"+a.data[0].id+"');"+">Delete</a></li></ul></div>");
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
	}
}
function actualizar_dato_interest() {
	var datos = $("#formulario").serialize();
	var skill = $("#titulo").val();
	if (skill != "") {
		$.ajax({
			url: base_url+"ajax/editar_interest",
			type: "POST",
			dataType: "json",
			data: datos,
			success: function(a) {
				$("#button_"+a.data[0].id).html(a.data[0].title);
				$("#titulo").val('');
				$("#button").html('Add');
				$("#type").val(1);
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
	}
}
function upload_country (id_country) {
	if ($("#check_"+id_country).data('check')) {
		$("#check_"+id_country).data('check', false);
		dato = 1;
	}else {
		$("#check_"+id_country).data('check', true);
		dato = 0;
	}
	array = {
		'id' : id_country,
		'accept' : dato,
	}
	$.ajax({
		url: base_url+"ajax/editar_pais",
		type: "POST",
		dataType: "json",
		data: array,
		success: function(a) {
			// console.log('actualizado');
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}