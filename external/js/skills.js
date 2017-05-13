function editar_skill(id_skill) {
	$("#id_skill").val(id_skill);
	$("#titulo").val($("#button_"+id_skill).html());
	$("#button").html('Edit');
	$('#formulario').attr('action', '<?php echo base_url(); ?>administrador/dashboard/editar_skill');
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
				$("#insercciones").append("&nbsp;<div class='btn-group' id='"+a.data[0].id+"'><button type='button' class='btn btn-primary' id='button_"+a.data[0].id+"'>"+a.data[0].title+"</button><button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span class='caret'></span><span class='sr-only'>Toggle Dropdown</span></button><ul class='dropdown-menu'><li><a id='edit_"+a.data[0].id+"' onclick="+"editar_skill('"+a.data[0].id+"');"+">Editar</a></li><li><a href='#modal-delete' data-toggle='modal' onclick="+"elimiar_skill('"+a.data[0].title+"');"+">Eliminar</a></li></ul></div>");
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