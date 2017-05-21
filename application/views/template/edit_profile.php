<?php foreach ($user as $u) { ?>


<form class="form-horizontal" id="form_edit_profile" method="POST" role="form">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Profile Photo</label>
		<div class="col-sm-10"><input type="file" class="form-control" id="profile_photo" name="profile_photo" placeholder="Profile Photo"></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Cover Photo</label>
		<div class="col-sm-10"><input type="file" class="form-control" id="cover_photo" name="cover_photo" placeholder="Cover Photo"></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Full Name</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="nombres" value="<? echo $u->nombres; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Date Birth</label>
		<div class="col-sm-10">
			<!-- <input type="date" class="form-control" name="date_born" value="<? echo $u->date_born; ?>" required> -->
			<input type="text" class="form-control" id="date" placeholder="Date" name="date_born" required readonly value="<? echo $u->date_born; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Email</label>
		<div class="col-sm-10"><input type="email" class="form-control" name="email" value="<? echo $u->email; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Country</label>
		<div class="col-sm-10">
			<select id="s_country" name="country" class="form-control" required="required">
				<option value="">-- COUNTRY --</option>
				<?php foreach ($country->result() as $key => $c): ?>
					<option value="<? echo $c->id; ?>" selected="selected"><? echo $c->country ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Educational</label>
		<div class="col-sm-10">
		<!-- <input type="text" class="form-control" name="educational" value="<? echo $u->educational; ?>" required> -->
			<select id="s_education" name="educational" class="form-control" required="required">
				<option value="">-- Educational Background --</option>
				<?php foreach ($education as $edu): ?>
					<?php if ($edu->id == $u->educational) { ?>
						<option value="<? echo $edu->id; ?>" selected><? echo $edu->title ?></option>
					<?php }else { ?>
							<option value="<? echo $edu->id; ?>"><? echo $edu->title ?></option>
						<?php } ?>
					
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Industry</label>
		<div class="col-sm-10">
		<!-- <input type="text" class="form-control" name="industry" value="<? echo $u->industry; ?>" required> -->
			<select id="s_industry" name="industry" class="form-control" required="required">
				<option value="">-- Educational Background --</option>
				<?php foreach ($industries as $indu): ?>
					<?php if ($indu->id == $u->industry) { ?>
						<option value="<? echo $indu->id; ?>" selected><? echo $indu->title ?></option>
					<?php }else { ?>
							<option value="<? echo $indu->id; ?>"><? echo $indu->title ?></option>
						<?php } ?>
					
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Languages</label>
		<div class="col-sm-10">
		<!-- <input type="text" class="form-control" name="languages" value="<? echo $u->lang; ?>" required> -->
			<select id="s_lang" name="languages[]" class="form-control" required="required" multiple="multiple">
				<option value="">-- LANGUAGES --</option>
				<?php foreach ($languages as $lang): ?>
					<option value="<? echo $lang->id; ?>"><? echo $lang->title ?></option>
				<?php endforeach ?>
			</select>
		</div>


	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Occupation</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="occupation" value="<? echo $u->occupation; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Skills</label>
		<div class="col-sm-10">
			<select id="s_skill" name="skills[]" class="form-control" required="required" multiple="multiple">
				<option value="">-- SKILLS --</option>
				<?php foreach ($skills->result() as $key => $s): ?>
					<option value="<? echo $s->id; ?>"><? echo $s->title ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Interests</label>
		<div class="col-sm-10">
			<select id="interests" name="interests[]" class="form-control" required="required" multiple="multiple">
				<option value="">-- INTERESTS --</option>
				<?php foreach ($interests->result() as $key => $i): ?>
					<option value="<? echo $i->id; ?>"><? echo $i->title ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<hr>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<link rel="stylesheet" href="<? echo base_url() ?>external/plugins/select2/select2.min.css">
<script type="text/javascript" src="<? echo base_url() ?>external/plugins/select2/select2.min.js"></script>
<script type="text/javascript">
	var skills = JSON.parse('<?php echo $u->skills; ?>');
	var interests = JSON.parse('<?php echo $u->interests; ?>');
	var languages = JSON.parse('<?php echo $u->lang; ?>');
	// console.log(skills);
	// console.log(interests);
	$(function(){
		select_options();
		select_plugin();
		send_form();
	});
	function select_options(){
		$.each(skills,function(i, e){
			// console.log(e);
			$('#s_skill option[value="'+e+'"]').attr('selected','selected');
		});
		$.each(interests,function(i, e){
			// console.log(e);
			$('#interests option[value="'+e+'"]').attr('selected','selected');
		});
		$.each(languages,function(i, e){
			// console.log(e);
			$('#s_lang option[value="'+e+'"]').attr('selected','selected');
		});
	}
	function send_form(){
		$('#form_edit_profile').submit(function(event){
			event.preventDefault();
			var datos_F = $(this).serialize();
			var datos = {form: datos_F, skills: $('#s_skill').val()};
			// console.log(datos);
			$.ajax({
				url: base_url+'ajax_/edit_user',
				type: 'POST',
				dataType: 'json',
				data: datos,
				beforeSend: function(){
			
				},
				success: function(r){
				    console.log(r);
				    if (r == 1) {
				    	$(".btn-primary").attr("disabled", "disabled");
				    	location.reload();
				    }
				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}
	function select_plugin(){
		// console.log('select2');
		$('#s_country').select2();
		$('#s_skill').select2();
		$('#interests').select2();
		$('#s_lang').select2();
		$('#s_industry').select2();
		$('#s_education').select2();
		$( "#date" ).datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
		});
		$("#profile_photo").fileinput({
			showUpload: false,
			showRemove: false,
			allowedFileExtensions: ['jpg', 'png', 'gif', 'JPG', 'JPEG', 'PNG'],
			initialPreview: [
				base_url+'uploads/fotos_perfil/<?php echo $u->foto_perfil; ?>',
			],
			initialPreviewAsData: true,
			initialPreviewConfig: [
				{caption: "<?php echo $u->foto_perfil; ?>", size: 930321, width: "120px", key: 1},
			],
			uploadUrl: base_url+'ajax_/change_photo',
			uploadExtraData: {user_id: "<?php echo $u->id_usuario; ?>"},
			maxFileCount: 1,
		});
		$("#cover_photo").fileinput({
			showUpload: false,
			showRemove: false,
			allowedFileExtensions: ['jpg', 'png', 'gif', 'JPG', 'JPEG', 'PNG'],
			initialPreview: [
				base_url+'uploads/fotos_perfil/<?php echo $u->foto_portada; ?>',
			],
			initialPreviewAsData: true,
			initialPreviewConfig: [
				{caption: "<?php echo $u->foto_portada; ?>", size: 930321, width: "120px", key: 1},
			],
			uploadUrl: base_url+'ajax_/change_photo_cover',
			uploadExtraData: {user_id: "<?php echo $u->id_usuario; ?>"},
			maxFileCount: 1,
		});
	}
</script>
<?php } ?>