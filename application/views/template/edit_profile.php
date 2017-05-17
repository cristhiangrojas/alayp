<form class="form-horizontal" id="form_edit_profile" method="POST" role="form">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Full Name</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="nombres" value="<? echo $u->nombres; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Date Birth</label>
		<div class="col-sm-10"><input type="date" class="form-control" name="date_born" value="<? echo $u->date_born; ?>" required></div>
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
					<option value="<? echo $c->id; ?>"><? echo $c->country ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Educational</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="educational" value="<? echo $u->educational; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Industry</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="industry" value="<? echo $u->industry; ?>" required></div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Languages</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="languages" value="<? echo $u->languages; ?>" required></div>
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
	$(function(){
		select_plugin();
		send_form();
	});
	function send_form(){
		$('#form_edit_profile').submit(function(event){
			event.preventDefault();
			var datos_F = $(this).serialize();
			var datos = {form: datos_F, skills: $('#s_skill').val()};
			console.log(datos);
			$.ajax({
				url: base_url+'ajax_/edit_user',
				type: 'POST',
				dataType: 'json',
				data: datos,
				beforeSend: function(){
			
				},
				success: function(r){
				    console.log(r);
				},
				error: function(xhr, status, error){
				    console.log(xhr.responseText);
				},
			});
		});
	}
	function select_plugin(){
		$('#s_country').select2();
		$('#s_skill').select2();
		$('#interests').select2();
	}
</script>