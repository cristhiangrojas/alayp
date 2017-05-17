<div class="content-wrapper">
	<section class="content-header">
			<h1>Settings | Events</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Configuración</li>
			</ol>
		</section>
<br>
<div class="box">
<div class="box-header">
	<h3 class="box-title">Add New Event</h3>
</div>

	<div class="box-body">
		<form class="form-horizontal" method="POST" id="formulario" enctype="multipart/form-data">
		<input type="hidden" id="tipo" value="1">
		<input type="hidden" id="id_event">
			<div class="form-group" >
				<label for="inputEmail3" class="col-sm-2 control-label">Image Background</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" id="background" name="image_background" required accept="image/*">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="foto" placeholder="Title" name="title" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<textarea name="description" class="form-control" id="descripcion" placeholder="Description" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="date" placeholder="Date" name="date" required readonly>
					<input type="hidden" class="form-control" id="creation_date" placeholder="Date" name="creation_date" value="<?php echo date('Y-m-d'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Time</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="00:00:00" id="clockpicker" readonly name="time">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Location</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="location" name="location" required placeholder="Location">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Speakers</label>
				<div class="col-sm-10">
					<a href="#modal-conferencist" data-toggle="modal">Speakers</a>
					<input type="hidden" name="conferencist" value="0" id="conferencist">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Registry Link</label>
				<div class="col-sm-10">
					<input type="url" class="form-control" id="registry" placeholder="Registry Link" name="registry_link" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Registration Processes</label>
				<div class="col-sm-10">
					<input type="url" class="form-control" id="registration" placeholder="Registration Processes" name="registration_processes" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Ubication</label>
				<div class="col-sm-10">
					<a href="#modal-ubication" data-toggle="modal">Ubication</a>
					<input type="hidden" name="ubication" value="0">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Featured Event</label>
				<div class="col-sm-10">
					<input type="hidden" name="featured_event" value="0" id="value_featured_event">
					<div class="onoffswitch">
						<input type="checkbox" class="onoffswitch-checkbox" id="featured_event" data-active="true" onclick="vfeatured_event();">
						<label class="onoffswitch-label" for="featured_event">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Type</label>
				<div class="col-sm-10">
					<input type="hidden" name="type" value="0" id="value_type">
					<div class="onoffswitchp">
						<input type="checkbox" class="onoffswitch-checkboxp" id="type" data-active="true" onclick="active_cost();">
						<label class="onoffswitch-labelp" for="type">
							<span class="onoffswitch-innerp"></span>
							<span class="onoffswitch-switchp"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group" id="cost" style="display: none;">
				<label for="inputEmail3" class="col-sm-2 control-label">Cost</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="value_cost" placeholder="Cost" name="cost" value="0" required>
				</div>
			</div>
			<div class="box-footer">
				<center>
					<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-plus fa fa-white"> </i> <i id="text_button">Save</i></button>
				</center>
			</div>
		</form>
		<div class="col-sm-12">
			<div style="background-color: #ecf0f5;    padding: 10px;" id="insercciones">
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Description</th>
								<th>Date</th>
								<th>Time</th>
								<th>Location</th>
								<th>Speakers</th>
								<th>Registry Link</th>
								<th>Registration Processes</th>
								<th>Ubication</th>
								<th>Featured Event</th>
								<th>Type</th>
								<th>Cost</th>
								<th>update</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody id="content_table">
						<?php if ($events_upcoming > 0) { 
							foreach ($events_upcoming as $row) {?>
							<tr id="tr_<?php echo $row->id;?>">
								<td><?php echo $row->id; ?></td>
								<td id="title_<?echo $row->id;?>"><?php echo $row->title; ?></td>
								<td id="description_<?php echo $row->id;?>"><a onclick="consultar_descripcion('<?php echo $row->id;?>',0)">Description</a></td>
								<td id="date_<?echo $row->id;?>"><?php echo $row->date; ?></td>
								<td id="time_<?echo $row->id;?>"><?php echo $row->time; ?></td>
								<td id="location_<?echo $row->id;?>"><?php echo $row->location; ?></td>
								<td><?php echo $row->conferencist; ?><input type="hidden" id="conferencist_<?echo $row->id;?>" value="<?php echo $row->conferencist ?>"></td>
								<td><a href="<?php echo $row->registry_link; ?>" target="_blank" id="registry_<?echo $row->id;?>">Registry Link</a></td>
								<td><a href="<?php echo $row->registration_processes; ?>" target="_blank" id="registration_<?echo $row->id;?>">Registration Processes</a></td>
								<td><?php echo $row->ubication; ?></td>
								<td><?php echo $row->featured_event == 0 ? 'No' : 'Yes'  ?><input type="hidden" id="featured_event_<?echo $row->id;?>" value="<?php echo $row->featured_event ?>"></td>
								<td><?php echo $row->type == 0 ? 'Free' : 'Pay'  ?> <input type="hidden" id="type_<?echo $row->id;?>" value="<?php echo $row->type ?>"></td>
								<td><?php echo $row->cost; ?></td>
								<td><center><i class="fa fa-pencil" aria-hidden="true" onclick="edit_event('<?php echo $row->id; ?>')" style="cursor: pointer; cursor: hand;"></i></center></td>
								<td><center><i class="fa fa-trash" aria-hidden="true" onclick="abrir_delete('<?php echo $row->id; ?>',1)" style="cursor: pointer; cursor: hand;"></i></center></td>
							</tr>	
						<?php }} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div id="modal-conferencist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" id="speakers" enctype="multipart/form-data" class="form-horizontal">
				<input type="hidden" id="tipo_speakers" value="1">
				<input type="hidden" id="sid" value="<?php echo $last_id_speakers == 0 ? '1' : $last_id_speakers + 1  ?>" name="sid">
				<input type="hidden" id="id_speaker">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="cerrar_modal">×</button>
					<h5 id="myModalLabel">Speakers</h5>
				</div>
				<div class="modal-body">
					<div class="btn-group" id="add_button" style="display: none;">
					</div>
					<center>
						<div class="col-sm-12" id="div_photo"></div>
					</center>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="titulo" name="photo" required accept="image/*">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Profession</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="profession" placeholder="Profession" name="profession" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea name="description" class="form-control" id="description" placeholder="Description" required></textarea>
						</div>
					</div>
					<div class="form-group" id="guardando" style="display:none;">
						<center>
							<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						</center>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-success" id="button_save">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>



<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" id="delete_speakers" enctype="multipart/form-data" class="form-horizontal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="cerrar_modal">×</button>
					<h5 id="myModalLabel">Speakers</h5>
				</div>
				<div class="modal-body">
					<h5 style="text-align: center">Are you sure you want to delete this speaker?</h5>
					<input type="hidden" name="id" id="id_delete_speaker">
					<input type="hidden" name="image_delete" id="image_delete">
					<input type="hidden" id="type_Delete">
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true" id="close_delete">Close</button>
					<button class="btn btn-success" id="button_save">Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="modal-description" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="cerrar_modal">×</button>
				<h5 id="myModalLabel">Description</h5>
			</div>
			<div class="modal-body">
				<h5 style="text-align: justify;" id="descriptionmodal"></h5>
				<input type="hidden" name="id" id="id_delete_speaker">
				<input type="hidden" name="image_delete" id="image_delete">
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true" id="close_delete">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
$(function() {
	validateFormEvents();
	$( "#date" ).datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
	});
	$('#clockpicker').clockpicker({
		placement: 'top',
		align: 'left',
		donetext: 'Done'
	});
	$("#clockpicker").on('change',function(){
		$("#clockpicker").val($("#clockpicker").val()+":00");
	});
})
</script>