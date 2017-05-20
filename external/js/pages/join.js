var modal = $('#myModal');
var modal2 = $('#sign_in_ok');
var level;
var aceptar = false;
$(document).ready(function(){
	console.log(666);
	//add_paises();
	sign_up();
	show_form();
	send_form();
	check_user();
	change_level_user();
	$("#s_country").select2({
		placeholder: "Country"
	})
	$("#interests").select2({
		placeholder: "Interests"
	})
	$("#languages").select2({
		placeholder: "Languages"
	})
	$("#industry").select2({
		placeholder: "Industry"
	})
	$("#educational").select2({
		placeholder: 'Educational Background'
	})
});
	function check_user(){
		$('input#user').change(function(){
			var group = $(this).closest('.form-group');
			var icon = $(group).find('#icon_user');
			var status_user = $(group).find('#status_user');
			var user = $(this).val();
			var datos = {user: user};
			$.ajax({
				url: base_url+'ajax/check_user',
				type: 'POST',
				dataType: 'json',
				data: datos,
				beforeSend: function(){
					$(icon).show();
					$(icon).html('<i class="fa fa-spin fa-spinner"></i>');
				},
				success: function(r){
					var s = r['status'];
					if(s==0){
						$(icon).html('<i class="fa fa-check"></i>');
						aceptar = true;
					}else {
						$(status_user).show().text('User has been registered');
						$(status_user).show().text('User has been registered');
						$(icon).html('<i class="fa fa-close"></i>');
						aceptar = false;
					}
				    console.log(r);
				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}
	function change_level_user(){
		$('[id="btn_level"]').click(function(){
			var plan = $(this).data('level');
			$('[id="btn_level"]').removeClass('active');
			$(this).addClass('active');
			$('#level_single').val(plan);
		})
	}
	function sign_up(){
		//$('#form_signup').
	}
	function show_form(){
		$('[id="show_form"]').click(function(event) {
			$('#level_user').val('');
			$('[id="btn_level"]').removeClass('active');
			$('[id="btn_level"][data-level="entrepreneur"]').addClass('active');
			$('#level_single').val('entrepreneur');
			level = $(this).data('level');
			$(modal).modal('show');
			if(level == 'single'){
				$(modal).find('.modal-title').text('INDIVIDUAL');
				$(modal).find('#email').attr('placeholder','Email');
				$(modal).find('#name').attr('placeholder','Full Name');
				//$(modal).find('#date_born, #occupation, #educational').attr('required',true).show();
				$(modal).find('#type_single').show();
			} else {
				$(modal).find('.modal-title').text('COMPANY/ORGANIZATION');
				$(modal).find('#email').attr('placeholder','Email');
				$(modal).find('#name').attr('placeholder','Company Full Name');
				$(modal).find('#type_single').hide();
				$(modal).find('#date_born, #occupation, #educational').removeAttr('required').hide();
			}
			$('#level_user').val(level);
			console.log(level);
		});
	}
	function send_form(){
		$('#form_signup').submit(function(e){
			e.preventDefault();
			var modal2 = $('#sign_in_ok');
			var form = $(this);
			var datos = $(form).serialize();
			$.ajax({
				url: base_url+'ajax/register_user',
				type: 'POST',
				dataType: 'json',
				data: datos,
				beforeSend: function(){
			
				},
				success: function(r){
					$(modal).modal('hide');
					$(modal2).modal('show');
				    console.log(r);
				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}
	function select_plan(){

	}
