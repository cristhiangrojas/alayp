var modal = $('#modal_forum');
var form = $('#form_forum');
var textarea = $('#text_forum').wysihtml5({toolbar: {
	"font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"image": false, //Button to insert an image. Default true,
	"color": false, //Button to change color of font  
	"blockquote": true, //Blockquote  
  }
});
$(document).ready(function(){
	create_forum();
	send_forum();
	search_forum();
});
	function create_forum(){
		$('#reply_forum').click(function(){
			$(modal).find('#status_form').hide(0);
			$(form).show(0);
			$(modal).modal('show');
			reset_form();
		})
	}
	function reset_form(){
		$('iframe').contents().find('.wysihtml5-editor').html('');
	}
	function send_forum(){
		$('#form_forum').submit(function(event) {
			event.preventDefault();
			$(form).slideUp();
			var datos = $(this).serialize();
			$.ajax({
				url: base_url+'ajax/reply_forum',
				type: 'POST',
				dataType: 'json',
				data: datos,
				beforeSend: function(){
					$(modal).find('#status_form').html('<h3 class="text-center">Sending... <i class="fa fa-spin fa-spinner"></i></h3>').show();
				},
				success: function(r){
					$(modal).find('#status_form').html('<h3 class="text-center"> <i class="fa fa-check"></i></h3>').show();
					if(r['data'].length > 0){
						var d = r['data'][0];
						var fecha = formatDate(new Date(d['date']));
						var info = 
							'<div class="fondo_noticias">'+
								'<div class="forum_details">'+
									'<small class="slogan">'+d['nombres']+'</small><br />'+
									'<small>'+fecha+'</small><br />'+
									'<p>'+d['content']+'</p>'+
									'<div class="linea"></div>'+
								'</div>'+
							'</div>';
						$('#list_forums').append(info);
					}

				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}
	function search_forum(){
		$('#search_forum').click(function(){
			$('#form_search').submit();
		});
	}
	function formatDate(date) {
		var monthNames = [
			"January", "February", "March",
			"April", "May", "June", "July",
			"August", "September", "October",
			"November", "December"
		];
		var day = date.getDate();
		var monthIndex = date.getMonth();
		var year = date.getFullYear();
		var hour = date.getHours();
		var minute = date.getMinutes();
		return monthNames[monthIndex]+' '+day+' '+year+' at '+hour+':'+minute;
	}
