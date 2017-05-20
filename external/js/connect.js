function checking(value){
 
	 if ($("#span_"+value).data('role')) {
		$("#span_"+value).data('role',false);
		$("#span_"+value).prop('checked', true);
		$("#span_"+value).addClass('checked');
		$("#input_"+value).addClass('checkedt');
		$("#fa_"+value).removeClass('fa-times');
		$("#fa_"+value).addClass('fa-check');
		$("#"+value).prop('checked',true);
	 }else {
		$("#span_"+value).data('role',true);
		$("#span_"+value).prop('checked', false);
		$("#span_"+value).removeClass('checked');
		$("#input_"+value).removeClass('checkedt');
		$("#fa_"+value).removeClass('fa-check');
		$("#fa_"+value).addClass('fa-times');
		$("#"+value).prop('checked',false);
	 }
}
function activate_modal() {
		$("#myModal").modal({
			remote: "connect/connect_modal"
		});
}
$("#busqueda").on('submit',function(e){
	datos = $("#busqueda").serialize();
	if (datos != "") {
		$.ajax({
			url: base_url+"ajax/busqueda",
			type: "POST",
			dataType: "json",
			data: datos,
			beforeSend: function() {
				$("#resultado").html('<center>'
					+'<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>'
					+'</center>');
			},
			success: function(data) {
				// $("#resultado").html(a);
				$("#resultado").html('');
				if(data.length > 0)
				{
					for(i=0; i<data.length; i++)
					{
						if (data[i].nombres == null) {
							nombres = "";	
						}else {
							nombres = data[i].nombres;
						}
						if (data[i].apellidos == null) {
							apellidos = "";	
						}else {
							apellidos = data[i].apellidos;
						}
						$("#resultado").append('<div class="row persona">'
							+'<div class="col-xs-6 col-sm-9 contenido">'
							+'<div class="col-xs-6 col-sm-3 centrado">'
							+'<img src="external/img/avatar2.jpg" alt="foto de perfil" class="foto_perfilp">'
							+'</div>'
							+'<div class="col-xs-6 col-sm-4 centrado">'
							+'<div class="floating-box2"><span class="nombre">'
							+nombres+' '+apellidos
							+'</span></div><br>'
							+'<div class="floating-box2"><span class="profesion">'+data[i].occupation+'</span></div>'
							+'</div>'
							+'<div class="col-xs-6 col-sm-5">'
							+'<div class="floating-box2"><span class="tdtitle bold">Located In -</span> <span class="tdtitle"> '+data[i].nombre_pais+'</span></div>'
							+'<div class="floating-box2"><span class="tdtitle bold">Industry -</span><span class="tdtitle"> '+data[i].nombre_industria+'</span></div>'
							+'<div class="floating-box2"><span class="tdtitle bold">Languages -</span><span class="tdtitle"> '+data[i].languages +'</span></div>'
							+'<div class="floating-box2"><span class="tdtitle bold">Education background -</span><span class="tdtitle"> '+data[i].nombre_educacion+'</span></div>'
							+'</div>'
							+'</div>'
							+'<div class="col-xs-6 col-sm-3 centrado">'
							+'<button type="button" class="btn btn-default btn_connect" onclick="redireccionar('+data[i].id_usuario+')"><i class="logo">Connect</i>&nbsp;<i class="fa fa-plug logos"></i></button>'
							+'</div>'
							+'</div>'
							+'<hr class="hr">'
							);
					}
				}
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		});
	}
	e.preventDefault();
});
function nombre_pais(id_pais) {
	if (id_pais != "") {
		$.ajax({
			url: base_url+"ajax/nombre_pais",
			type: "POST",
			dataType: "json",
			data: 'id='+id_pais,
			success: function(a){
				console.log(a.data[0].country);
				// $("#"+id_pais).html(a.data[0].country);
				return id_pais;
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		})
	}
	
}
function redireccionar(id){
	location.href = base_url+"connect/user/"+id;
}
function tipo_consulta(id) {
	if ($("#button_"+id).data('active')) {
		$("#"+id).val("1");
		$("#button_"+id).data('active',false);
		$("#button_"+id).addClass("active");
	}else {
		$("#"+id).val("");
		$("#button_"+id).data('active',true);
		$("#button_"+id).removeClass("active");
	}
}
function enlaces(id,numero) {
	if ($("#button_"+id).data('active')) {
		$("#"+id).val(numero);
		$("#button_"+id).data('active',false);
		$("#button_"+id).addClass("active");		
	}else {
		$("#"+id).val(numero);
		$("#button_"+id).data('active',true);
		$("#button_"+id).removeClass("active");
	}
}