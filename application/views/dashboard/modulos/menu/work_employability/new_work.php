<div class="content-wrapper">
	<section class="content-header">
			<h1>Settings | Works</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Configuración</li>
			</ol>
		</section>
		<br>
		<?php
		if ($last_sid != 0) {
			foreach ($last_sid as $key ){
				$sid = $key->images + 1;
			}
		}else {
			$sid = 1;
		}
		?>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Add New Work</h3>
			</div>
			<div class="box-body">
				<form class="form-horizontal" method="POST" id="work_form" name="work_form">
				<input type="hidden" id="sid" name="images" value="<?php echo $sid ?>">
				<input type="hidden" id="tipo_guardado" value="1">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea name="description" id="description" placeholder="Description" class="form-control" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Images</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="images" name="images" required multiple>
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
						<label for="inputEmail3" class="col-sm-2 control-label">Skills</label>
						<div class="col-sm-10">
							<select id="skills" name="skills[]" class="form-control" required="required" multiple="multiple">
								<?php foreach ($list_skills as $key): ?>
									<option value="<? echo $key->id; ?>"><? echo $key->title ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">City</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="city" placeholder="City" name="city" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="country" placeholder="Country" name="country" required>
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
									<th>ID</th>
									<th>Title</th>
									<th>Description</th>
									<th>Ubication</th>
									<th>Skills</th>
									<th>Images</th>
									<th>City</th>
									<th>Country</th>
									<th>Edit</th>
									<th>Delete</th>
								</thead>
								<tbody id="content_table">
									<?php if ($list_jobs > 0) {
										foreach ($list_jobs as $row) {?>
										<tr>
											<td><?php echo $row->id ?></td>
											<td><?php echo $row->title ?></td>
											<td><?php echo $row->description ?></td>
											<td><?php echo $row->ubication ?></td>
											<td><?php echo $row->skills ?></td>
											<td><?php echo $row->images ?></td>
											<td><?php echo $row->city ?></td>
											<td><?php echo $row->country ?></td>
											<td><center><i class="fa fa-pencil" aria-hidden="true" style="cursor: pointer; cursor: hand;"></i></center></td>
											<td><center><i class="fa fa-trash" aria-hidden="true" style="cursor: pointer; cursor: hand;"></i></center></td>
										</tr>
										<?php }
									} ?>
								</tbody>
							</table>
						</div>
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
<!-- 
// descripcion
// titulo
// ubicacion -->
