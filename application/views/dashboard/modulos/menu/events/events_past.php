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
	<h3 class="box-title">Past Events</h3>
</div>

	<div class="box-body">
		<div class="col-sm-12">
			<div style="background-color: #ecf0f5;    padding: 10px;" id="insercciones">
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead>
							<tr>
								<th>ID</th>
								<th>Image</th>
								<th>Title</th>
								<th>Description</th>
								<th>Date</th>
								<th>Time</th>
								<th>Location</th>
								<th>Conferencist</th>
							</tr>
						</thead>
						<tbody id="content_table">
						<?php if ($events_past > 0) { 
							foreach ($events_past as $row) {?>
							<tr>
								<td><?php echo $row->id; ?></td>
								<td><a data-toggle="modal" data-id="<?php echo $row->id; ?>" class="abrir_modal" data-image="<?php echo $row->image; ?>">Image Background</a></td>
								<td><?php echo $row->title; ?></td>
								<td><?php echo $row->description; ?></td>
								<td><?php echo $row->date; ?></td>
								<td><?php echo $row->time; ?></td>
								<td><?php echo $row->location; ?></td>
								<td><?php echo $row->conferencist; ?></td>
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

<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" id="image_background" enctype="multipart/form-data" class="form-horizontal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="cerrar_modal">×</button>
					<h5 id="myModalLabel">Image Background</h5>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_event" name="id_event">
					<div class="col-sm-12" id="imagen">
					</div>
					<br>
					<br>
					<div class="form-group" id="image_background">
							<label for="inputEmail3" class="col-sm-2 control-label">Image Background</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" id="background" name="image_background" required accept="image/*">
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


<script>
$('.abrir_modal').on('click', function (event) {
	$('#modal').modal('show');
	$("#id_event").val($(this).data('id'));
	if ($(this).data('image') != "") {
		$("#imagen").html('<img src="'+base_url+'uploads/events/backgrounds/'+$(this).data('image')+'" width="100%">');
		$("#button_save").html('Update');
	}

});
$(function() {
	validateFormEvents();
})
</script>