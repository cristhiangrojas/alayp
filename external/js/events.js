function active_cost() {
	if ($("#type").data('active')) {
		$("#type").data('active',false);
		$("#value_cost").val('');
		$("#cost").css('display','');
		$("#value_type").val('1');
	}else {
		$("#type").data('active',true);
		$("#cost").css('display','none');
		$("#value_cost").val('0');
		$("#value_type").val('0');
	}
}
function vfeatured_event() {
	if ($("#featured_event").data('active')) {
		$("#value_featured_event").val('1');
		$("#featured_event").data('active',false);
	}else {
		$("#value_featured_event").val('0');
		$("#featured_event").data('active',true);
	}
}
function validateFormEvents() {
	$("#formulario").submit(function(e) {
		e.preventDefault();
		var type = $("#tipo").val();
		if (type == 1) {
			insert_event()
		}else if(type == 2) {
			update_event();
		}
	})
	$("#speakers").submit(function(e) {
		e.preventDefault();
		var tipo_speakers = $("#tipo_speakers").val();
		if (tipo_speakers == 1) {
			agregar_speaker();
		}else if (tipo_speakers == 2) {
			editar_speaker();
		}
	})
	$("#delete_speakers").submit(function(e) {
		e.preventDefault();
		var datos = $( "#delete_speakers" ).serialize();
		if ($("#type_Delete").val() == 0) {
			$.ajax({
				url: base_url+"ajax/delete_speaker",
				type: "POST",
				dataType: "json",
				data: datos,
				success: function(a) {
					$("#close_delete").trigger('click');
					$("#botones_"+a).remove();
					if ($("#id_speaker").val() == a) {
						$('#speakers')[0].reset();
						$("#div_photo").html('');
						$("#button_save").html('Save');
					}
				},
				error: function(xhr,status,error) {
					console.log(xhr.responseText);
				}
			})
		}else {
			$.ajax({
				url: base_url+"ajax/delete_event",
				type: "POST",
				dataType: "json",
				data: datos,
				success: function(a) {
					$("#close_delete").trigger('click');
					$("#tr_"+a['data'].id).remove();
				},
				error: function(xhr,status,error) {
					console.log(xhr.responseText);
				}
			})
		}

	});
}

function insert_event() {
	var formData = new FormData($("#formulario")[0]);
	$.ajax({
		url: base_url+"ajax/insert_event",
		type: "POST",
		dataType: "json",
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function (a) {
			$('#formulario')[0].reset();
			if (a.data[0].featured_event == 0) {
				featured_event = 'No';
			}else {
				featured_event = 'Yes';
			}
			if (a.data[0].type == 0) {
				type = 'Free';
			}else {
				type = 'Pay';
			}
			if (a.data[0].date >= a.data[0].creation_date) {
				$("#content_table").append('<tr id="tr_'+a.data[0].id+'" role="row" >'
					+'<td>'+a.data[0].id+'</td>'
					+'<td id="title_'+a.data[0].id+'">'+a.data[0].title+'</td>'
					+'<td id="description_'+a.data[0].id+'"><a onclick="consultar_descripcion('+a.data[0].id+',0)">Description</a></td>'
					+'<td id="date_'+a.data[0].id+'">'+a.data[0].date+'</td>'
					+'<td id="time_'+a.data[0].id+'">'+a.data[0].time+'</td>'
					+'<td id="location_'+a.data[0].id+'">'+a.data[0].location+'</td>'
					+'<td>'+a.data[0].conferencist+'<input type="hidden" id="conferencist_'+a.data[0].id+'" value="'+a.data[0].conferencist+'"></td>'
					+'<td><a href="'+a.data[0].registry_link+'" target="_blank" id="registry_'+a.data[0].id+'">Registry Link</a></td>'
					+'<td><a href="'+a.data[0].registration_processes+'" target="_blank" id="registration_'+a.data[0].id+'">Registration Processes</a></td>'
					+'<td>'+a.data[0].ubication+'</td>'
					+'<td>'+featured_event+'<input type="hidden" id="featured_event_'+a.data[0].id+'" value="'+a.data[0].featured_event+'"></td>'
					+'<td>'+type+'<input type="hidden" id="type_'+a.data[0].id+'" value="'+a.data[0].type+'"></td>'
					+'<td>'+a.data[0].cost+'</td>'
					+'<td><center><i class="fa fa-pencil" aria-hidden="true" onclick="edit_event('+a.data[0].id+')" style="cursor: pointer; cursor: hand;"></i></center></td>'
					+'<td><center><i class="fa fa-trash" aria-hidden="true" onclick="delete_event('+a.data[0].id+')" style="cursor: pointer; cursor: hand;"></i></center></td>'
					+'</tr>'
				);
				$("#sid").val(parseFloat(a.data[0].conferencist) + 1);
				$("#add_button").css('display','none');
				$("#add_button").html('');
			}
			// $(".odd").remove();
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}

function agregar_speaker () {
	var formData = new FormData($("#speakers")[0]);
	$.ajax({
		url: base_url+"ajax/insert_speaker",
		type: "POST",
		dataType: "json",
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#guardando").css("display","");
		},
		success: function(a) {
			$("#guardando").css("display","none");
			$('#speakers')[0].reset();
			$("#sid").val(a.data[0].sid);
			$("#conferencist").val(a.data[0].sid);
			$("#add_button").append('<div class="btn-group botones_linea" id="botones_'+a.data[0].id+'">'
				+'<button type="button" class="btn btn-primary">'+a.data[0].name+'</button>'
				+'<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">'
				+ '<span class="caret"></span>'
				+'</button>'
				+'<ul class="dropdown-menu" role="menu">'
				+'<li><a onclick="edit_speaker('+a.data[0].id+')">Edit</a></li>'
				+'<li><a href="#modal-conferencist" data-toggle="modal" onclick="abrir_delete('+a.data[0].id+',0)" data-image="'+a.data[0].photo+'" id="a_'+a.data[0].id+'">Delete</a></li>'
				+'</ul>'
				+'</div>'
				+'&nbsp'
			);
			$("#add_button").css("display","");
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}
function countdown(id){
    var fecha = Date.parse(id);
    fecha = new Date(fecha);
    var hoy=new Date();
    var dias=0;
    var horas=0;
    var minutos=0;
    var segundos=0;
	if (dias == 0) {
		diasmos = "";
	}else {
		diasmos = dias + " Days ";
	}
    if (fecha>hoy){
        var diferencia=(fecha.getTime()-hoy.getTime())/1000
        dias=Math.floor(diferencia/86400)
        diferencia=diferencia-(86400*dias)
        horas=Math.floor(diferencia/3600)
        diferencia=diferencia-(3600*horas)
        minutos=Math.floor(diferencia/60)
        diferencia=diferencia-(60*minutos)
        segundos=Math.floor(diferencia)
        if (dias == 0) {
        	diasmos = "";
        }else {
        	diasmos = dias + " Days ";
        }
        $("#contador").html(diasmos + horas + ' Hours, ' + minutos + ' Minutes, ' + segundos + ' Seconds');

        if (dias>0 || horas>0 || minutos>0 || segundos>0){
            setTimeout("countdown(\"" + id + "\")",1000)
        }
    }
    else{
        $("#contador").html(diasmos + horas + ' Hours, ' + minutos + ' Minutes, ' + segundos + ' Seconds');
    }
}
function edit_speaker(id_speaker) {
	$.ajax({
		url: base_url+"ajax/info_speaker",
		type: "POST",
		dataType: "json",
		data: 'id_speaker='+id_speaker,
		success: function(a) {
			$("#titulo").removeAttr('required');
			$("#div_photo").html('<img src="'+base_url+'uploads/events/speakers/'+a.data[0].photo+'" width="30%">')
			$("#name").val(a.data[0].name);
			$("#profession").val(a.data[0].profession);
			$("#description").val(a.data[0].description);
			$("#sid").val(a.data[0].sid);
			$("#tipo_speakers").val(2);
			$("#id_speaker").val(a.data[0].id);
			$("#button_save").html('Update');
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}
function editar_speaker() {
	var formData = new FormData($("#speakers")[0]);
	formData.append('id_speaker',$("#id_speaker").val());
	$.ajax({
		url: base_url+"ajax/actualizar_speaker",
		type: "POST",
		dataType: "json",
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#guardando").css("display","");
		},
		success: function(a) {
			if (a.data[0].id != "") {
				$("#guardando").css("display","none");
				$("#titulo").attr('required');
				$("#titulo").val('');
				$("#div_photo").html('')
				$("#name").val('');
				$("#profession").val('');
				$("#description").val('');
				$("#sid").val(a.data[0].sid);
				$("#tipo_speakers").val(1);
				$("#id_speaker").val('');
				$("#button_save").html('Save');
			}
		},
		error: function(xhr,status,error) {
		console.log(xhr.responseText);
		}
	});

}
function edit_event(id_event) {
	$("#foto").val($("#title_"+id_event).html());
	consultar_descripcion(id_event,1);
	$("#date").val($("#date_"+id_event).html());
	$("#clockpicker").val($("#time_"+id_event).html());
	$("#location").val($("#location_"+id_event).html());
	$("#registry").val($("#registry_"+id_event).attr('href'));
	$("#registration").val($("#registration_"+id_event).attr('href'));
	$("#conferencist").val($("#conferencist_"+id_event).val());
	$("#id_event").val(id_event);
	if ($("#featured_event_"+id_event).val() == 1) {
		$("#featured_event").prop('checked',true);
		$("#featured_event").data('active',false);
		$("#value_featured_event").val(1);
	}else {
		$("#featured_event").prop('checked',false);
		$("#featured_event").data('active',true);
		$("#value_featured_event").val(0);
	}
	if ($("#type_"+id_event).val() == 1) {
		$("#type").prop('checked',true);
		$("#type").data('active',false);
		$("#value_type").val(1);
	}else {
		$("#type").prop('checked',false);
		$("#type").data('active',true);
		$("#value_type").val(0);
	}
	$("#tipo").val(2);
	$("#text_button").html('Update');
	$('html, body').animate({scrollTop:0}, 'slow');

}
function delete_event(id_event) {
	alert(id_event);
}
function update_event(){
	datos = $("#formulario").serialize();
	id = $("#id_event").val();
	$.ajax({
		url: base_url+"ajax/update_event",
		type: "POST",
		dataType: "json",
		data: datos+"&id="+id,
		success: function(a) {
			$('#formulario')[0].reset();
			// $("#title_"+id).html(consultar_descripcion(id));
			if (a.data[0].featured_event == 0) {
				featured_event = 'No';
			}else {
				featured_event = 'Yes';
			}
			if (a.data[0].type == 0) {
				type = 'Free';
			}else {
				type = 'Pay';
			}
			$("#tr_"+id).html('<td>'+a.data[0].id+'</td>'
					+'<td id="title_'+a.data[0].id+'">'+a.data[0].title+'</td>'
					+'<td id="description_'+a.data[0].id+'"><a onclick="consultar_descripcion('+a.data[0].id+',0)">Description</a></td>'
					+'<td id="date_'+a.data[0].id+'">'+a.data[0].date+'</td>'
					+'<td id="time_'+a.data[0].id+'">'+a.data[0].time+'</td>'
					+'<td id="location_'+a.data[0].id+'">'+a.data[0].location+'</td>'
					+'<td>'+a.data[0].conferencist+'<input type="hidden" id="conferencist_'+a.data[0].id+'" value="'+a.data[0].conferencist+'"></td>'
					+'<td><a href="'+a.data[0].registry_link+'" target="_blank" id="registry_'+a.data[0].id+'">Registry Link</a></td>'
					+'<td><a href="'+a.data[0].registration_processes+'" target="_blank" id="registration_'+a.data[0].id+'">Registration Processes</a></td>'
					+'<td>'+a.data[0].ubication+'</td>'
					+'<td>'+featured_event+'<input type="hidden" id="featured_event_'+a.data[0].id+'" value="'+a.data[0].featured_event+'"></td>'
					+'<td>'+type+'<input type="hidden" id="type_'+a.data[0].id+'" value="'+a.data[0].type+'"></td>'
					+'<td>'+a.data[0].cost+'</td>'
					+'<td><center><i class="fa fa-pencil" aria-hidden="true" onclick="edit_event('+a.data[0].id+')" style="cursor: pointer; cursor: hand;"></i></center></td>'
					+'<td><center><i class="fa fa-trash" aria-hidden="true" onclick="abrir_delete('+a.data[0].id+',1)" style="cursor: pointer; cursor: hand;"></i></center></td>'
			);



		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}
function consultar_descripcion (id_event,form) {
	$.ajax({
		url: base_url+"ajax/check_description",
		type: "POST",
		dataType: "json",
		data: "id="+id_event,
		success: function(a){
			if (form == 1) {
				$("#descripcion").val(a.data[0].description);
			}else {
				$('#modal-description').modal('show');
				$("#descriptionmodal").html(a.data[0].description);
			}
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	}); 
}
function abrir_delete(id_speaker,type) {
	$('#modal-delete').modal('show');
	$("#id_delete_speaker").val(id_speaker);
	$("#image_delete").val($('#a_'+id_speaker).data('image'));
	$("#type_Delete").val(type);
}