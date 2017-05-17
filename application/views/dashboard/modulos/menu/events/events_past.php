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
								<td><?php echo $row->title; ?></td>
								<td><a onclick="consultar_descripcion('<?php echo $row->id;?>',0)">Description</a></td>
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
$('.abrir_modal').on('click', function (event) {
	$('#modal').modal('show');
	$("#id_event").val($(this).data('id'));
	if ($(this).data('image') != "") {
		$("#imagen").html('<img src="'+base_url+'uploads/events/backgrounds/'+$(this).data('image')+'" width="100%">');
		$("#button_save").html('Update');
	}else {
		$("#imagen").html('');
		$("#button_save").html('Save');
	}

});
$(function() {
	validateFormEvents();
})
</script>