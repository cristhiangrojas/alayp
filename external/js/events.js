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

	$("#image_background").submit(function(e) {
		e.preventDefault();
		var formData = new FormData($("#image_background")[0]);
		$.ajax({
			url: base_url+"ajax/insert_background",
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
				$("#imagen").html('<img src="'+base_url+'uploads/events/backgrounds/'+a.data[0].image+'" width="100%">');
			},
			error: function(xhr,status,error) {
			console.log(xhr.responseText);
			}
		});
	})

}
function insert_event() {
	var datos = $( "#formulario" ).serialize();
	$.ajax({
		url: base_url+"ajax/insert_event",
		type: "POST",
		dataType: "json",
		data: datos,
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
				$("#content_table").append('<tr id="tr_"'+a.data[0].id+'>'
					+'<td>'+a.data[0].id+'</td>'
					+'<td>'+a.data[0].title+'</td>'
					+'<td>'+a.data[0].description+'</td>'
					+'<td>'+a.data[0].date+'</td>'
					+'<td>'+a.data[0].time+'</td>'
					+'<td>'+a.data[0].location+'</td>'
					+'<td>'+a.data[0].conferencist+'</td>'
					+'<td><a href="'+a.data[0].registry_link+'" target="_blank">Registry Link</a></td>'
					+'<td><a href="'+a.data[0].registration_processes+'" target="_blank">Registry Link</a></td>'
					+'<td>'+a.data[0].ubication+'</td>'
					+'<td>'+featured_event+'</td>'
					+'<td>'+type+'</td>'
					+'<td>'+a.data[0].cost+'</td>'
					+'</tr>'
				);
				$("#add_button").css('display','none');
				$("#add_button").html('');
			}
		},
		error: function(xhr,status,error) {
			console.log(xhr.responseText);
		}
	})
}

function agregar_speaker () {
	// var datos = $( "#speakers" ).serialize();
	// var conferencist = $("#conferencist").val();
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
			$("#add_button").append('<div class="btn-group botones_linea">'
				+'<button type="button" class="btn btn-primary">'+a.data[0].name+'</button>'
				+'<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">'
				+ '<span class="caret"></span>'
				+'</button>'
				+'<ul class="dropdown-menu" role="menu">'
				+'<li><a href="#">Edit</a></li>'
				+'<li><a href="#">Delete</a></li>'
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