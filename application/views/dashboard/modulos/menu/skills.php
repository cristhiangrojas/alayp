<div class="content-wrapper">
	<section class="content-header">
			<h1>Configuración | Skills</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Configuración</li>
			</ol>
		</section>
<br>
<div class="box">
<div class="box-header">
	<h3 class="box-title">Add New Skill</h3>
</div>

	<div class="box-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Skill</label>
				<div class="col-sm-5">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Skill">
				</div>
				<div class="col-sm-5">
					<button type="submit" class="btn btn-default">Add</button>
				</div>
			</div>
			<div class="col-sm-12">
			<?php if($lista_skills > 0) { ?>
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Dropdown
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="#">Editar</a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>

<?php }
		else {
			?>
			<center>No hay Registros</center>
			<?php
		}
 ?>
			</div>
		</form>
	</div>
</div>
</div>
