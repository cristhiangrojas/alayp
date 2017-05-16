<div class="content-wrapper">
	<section class="content-header">
			<h1>Settings | Countries</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Configuración</li>
			</ol>
		</section>
<br>
<div class="box">
<div class="box-header">
	<h3 class="box-title">Countries</h3>
</div>

	<div class="box-body">
		<div class="col-sm-12">
			<div class="container" style="background-color: #ecf0f5;    padding: 10px;" id="insercciones">
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead>
							<tr>
								<th>#</th>
								<th>ID</th>
								<th>Code</th>
								<th>Country</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if ($lista_paises > 0) {
									foreach ($lista_paises as $row) {
										?>
											<tr>
												<td><input type="checkbox" id="check_<?php echo $row->id; ?>" <?php echo $row->accept == 1 ? 'checked data-check="false"' : 'data-check="true"'  ?> onclick="upload_country('<?php echo $row->id; ?>')"></td>
												<td><?php echo $row->id; ?></td>
												<td><?php echo $row->code; ?></td>
												<td><?php echo $row->country; ?></td>
											</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>