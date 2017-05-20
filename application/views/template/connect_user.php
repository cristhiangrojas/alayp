<section id="newsfeed">
	<div class="section_1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-lg-8 col-xl-8">
					<div class="row">	
						<div class="col-md-12">
							<div class="grid_user">
								<img src="<?php echo base_url() ?>external/img/fondo.jpg" alt="foto de portada" class="foto_portada">
								<img src="<?php echo base_url() ?>external/img/avatar2.jpg" alt="foto de perfil" class="foto_perfil">
								<div class="background_perfil">
										<i class="fa fa-comments icono2" aria-hidden="true"></i>
									<?php if (is_logued()): if ($this->uri->segment(3) != "") {
										if ($_SESSION['id_usuario'] == $this->uri->segment(3)) {
											?>
											<i class="fa fa-edit icono1 edit" title="Edit Profile" aria-hidden="true"></i>
											<?php
										}else {
											?>
											<i class="fa fa-plug icono1" aria-hidden="true"></i>
											<?php
										}
									}else {
										?>
											<i class="fa fa-edit icono1 edit" title="Edit Profile" aria-hidden="true"></i>
										<?php
										}?>
										
									<?php else: ?>
										<i class="fa fa-plug icono1" aria-hidden="true"></i>
									<?php endif ?>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="grid_user equal_row">
								<div class="col-md-4">
									<h3 class="text-center" style="padding-top: 8px"><? echo $user->nombres; ?></h3>
								</div>
								<div class="col-md-3">
									<h4 class="text-center">
										<small>Country of Origin</small><br>
										<? echo $user->nombre_pais; ?>
									</h4>
								</div>
								<div class="col-md-3">
									<h4 class="text-center">
										<small>Country of current residency</small><br>
										--
									</h4>
								</div>
								<div class="col-md-2">
									<h4 class="text-center">
										<small>Date of birth</small><br>
										<? echo date('d/M/Y',strtotime($user->date_born)); ?>
									</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<br>
					<div class="row equal_row">
						<div class="col-md-4" id="profesional_information">
							<div class="grid_user">
								<div class="title_grid">Proffesional Information</div>
								<div class="content_grid list_information">
									<div class="list"><span class="tdtitle">Occupation:</span><? echo $user->occupation ?></div>
									<div class="list"><span class="tdtitle">Industry:</span> <? echo $user->industry; ?></div>
									<div class="list"><span class="tdtitle">Education Background:</span> <? echo $user->educational; ?></div>
									<div class="list"><span class="tdtitle">Languages:</span> <? echo $user->languages; ?></div>
								</div>
							</div>
						</div>
						<div class="col-md-4" id="skills">

							<div class="grid_user">
								<div class="title_grid">
									Skills
								</div>
								<div class="content_grid list_skill_user">
								<?php if($skills > 0) {
										foreach ($skills as $row) {?>
											<div class="skill sk3"><?php echo $row->title ?></div>
										<?php }
									}else {?>
											<div class="skill sk3">No Skills found</div>
										<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="grid_user">
								<div class="title_grid">
									Interests
								</div>
								<div class="content_grid list_skill_user">
									<?php 
									if ($interests > 0) {
									foreach ($interests as $key => $i): ?>
										<div class="skill sk3"><? echo $i->title; ?></div>

									<?php endforeach; }else {?>
										<div class="skill sk3">No Interests found</div>
									<?php
										} ?>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="grid_user">
								<div class="content_bio">
									<div class="title">
										<img src="<?php echo base_url() ?>external/img/BIO.png" alt="BIO">
									</div>
									<div class="content">
										<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<center>
					<div class="btn-group">
					  <button type="button" class="btn btn-default"><i class="logo">Linked</i>&nbsp;<i class="fa fa-linkedin-square logos"></i></button>
					  <button type="button" class="btn btn-default"><i class="fa fa-facebook-official logos"></i>&nbsp;<i class="logo">facebook</i></button>
					  <button type="button" class="btn btn-default"><i class="logo">twitter</i>&nbsp;<i class="fa fa-twitter logos"></i></button>
					  <button type="button" class="btn btn-default"><i class="fa fa-instagram logos"></i>&nbsp;<i class="logo">Instagram</i></button>
					  <button type="button" class="btn btn-default"><i class="fa fa-chrome logos"></i>&nbsp;<i class="logo">http://</i></button>
					</div>
					</center>

				</div>
				<div class="col-md-4 col-lg-4 col-xl-4">
					<div class="fondo_sponsors">
						<h6>Sponsors</h6>
						<!--<img src="<?php echo base_url() ?>external/img/sponsors.jpg" alt="" class="img-responsive" style="width: 100%;">
						<img src="<?php echo base_url() ?>external/img/sponsors1.jpg" alt="" class="img-responsive" style="width: 100%;">!
						<?php 

			                if ( count($listado_panel_centro_sponsors) > 0 ) 
			                {
			                  foreach ($listado_panel_centro_sponsors as $row)
			                  {
			                    echo '<img src="'.base_url().'uploads/newsfeed/panel_derecha/sponsors/'.$row->imagen.'" class="img-responsive" style="width: 100%;" />';
			                  }
			                }else{
			                  echo "";
			                }
			              ?>
					</div><br />
					<div class="fondo_sponsors">
						<h6>Connect</h6>
						<!--<img src="<?php echo base_url() ?>external/img/connect.jpg" alt="" class="img-responsive">!-->
						<?php 
			                if ( count($listado_panel_centro_connect) > 0 ) 
			                {
			                  foreach ($listado_panel_centro_connect as $row)
			                  {
			                    echo '<img src="'.base_url().'uploads/newsfeed/panel_derecha/connect/'.$row->imagen.'" class="img-responsive" style="width: 100%;" />';
			                  }
			                }else{
			                  echo "";
			                }
			              ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="modal_connect">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center" id="title_modal">Modal title</h4>
			</div>
			<div class="modal-body" id="modal_content">
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<? echo base_url() ?>external/js/pages/connect_user.js?<? echo time_unix(); ?>"></script>
