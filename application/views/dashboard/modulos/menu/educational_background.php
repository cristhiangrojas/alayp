<div class="content-wrapper">
	<section class="content-header">
			<h1>Settings | Educational Background</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Configuración</li>
			</ol>
		</section>
<br>
<div class="box">
<div class="box-header">
	<h3 class="box-title">Add New Educational Background</h3>
</div>

	<div class="box-body">
		<form class="form-horizontal" method="POST" id="formulario">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Educational Background</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="titulo" placeholder="Educational Background" name="title">
					<input type="hidden" name="id" id="id_skill">
					<input type="hidden" name="type" value="1" id="type">
				</div>
				<div class="col-sm-5">
					<button type="submit" class="btn btn-default" id="button">Add</button>
				</div>
			</div>
		</form>
			<div class="col-sm-12">
				<div class="container" style="background-color: #ecf0f5;    padding: 10px;" id="insercciones">
					<?php
						if($educational_background > 0) {
							foreach ($educational_background as $row) {
								?>
									<div class="btn-group" id="<?php echo $row->id; ?>">
										<button type="button" class="btn btn-primary" id='button_<?php echo $row->id; ?>'><?php echo $row->title ?></button>
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="caret"></span>
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li><a onclick="editar_skill('<?php echo $row->id; ?>','<?php echo $row->title; ?>');">Edit</a></li>
											<li><a href="#modal-delete" data-toggle="modal" onclick="elimiar_skill('<?php echo $row->id; ?>');">Delete</a></li>
										</ul>
									</div>
								<?php
							}
						}else {?>
							<div id="zero">
								<center>No Records</center>
							</div>
						<?php }?>
					</div>
			</div>
	</div>
</div>
</div>

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" id="formularioEl">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="cerrar_modal">×</button>
          <h5 id="myModalLabel">Delete Record</h5>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idSkill" name="id"/>
          <h5 style="text-align: center">Are you sure you want to delete this record?</h5>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <button class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(function() {
	formEducation();
})
</script>