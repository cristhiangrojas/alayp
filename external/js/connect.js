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
			success: function(a) {
				console.log(a);
			},
			error: function(xhr,status,error) {
				console.log(xhr.responseText);
			}
		});
	}
	e.preventDefault();
});