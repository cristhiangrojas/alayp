$(document).ready(function(){
	console.log(666);
	edit_profile();
});
	function edit_profile(){
		$('.icono1.edit').click(function(){
			$('#modal_connect').modal('show');
			var datos = {variable: 666};
			$.ajax({
				url: base_url+'ajax_/edit_profile',
				type: 'POST',
				dataType: 'html',
				data: datos,
				beforeSend: function(){
					$('#modal_content').html('<h4 class="text-center"><i class="fa fa-circle-o-notch fa-spin"></i></h4>');
				},
				success: function(r){
				    //console.log(r);
					$('#modal_content').html(r);
				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}