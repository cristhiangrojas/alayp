	<section id="newsfeed">

		<div class="section_1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-8">
						<div class="fondo_noticias">
								<div class="search">
									<h2>CONNECT WITH OTHERS</h2>
									<br>
									<div>
										<div class="col-xs-6 col-sm-3">
											<span class="keyword">Key word</span>
											<input type="text" class="inputkey">
										</div>
										<div class="col-xs-6 col-sm-3 padding">
											<button type="button" class="btn btn-default margin">Professional</button>
										</div>
										<div class="col-xs-6 col-sm-3 padding">
											<button type="button" class="btn btn-default margin">Entrepreneur</button>
										</div>
										<div class="col-xs-6 col-sm-3 padding">
											<button type="button" class="btn btn-default margin">Company / Organisation</button>
										</div>
									</div>
									<div>
										<div class="col-xs-6 col-sm-3 padding">
										  <div class="btn-group btn-default">
										    <button type="button" class="btn btn-default dropdown-toggle"
										            data-toggle="dropdown">
										      Location
										      <i class="fa fa-chevron-down fa_down" aria-hidden="true"></i>
										    </button>
										    <ul class="dropdown-menu">
										      <li><a href="#">Enlace #1</a></li>
										      <li><a href="#">Enlace #2</a></li>
										    </ul>
										  </div>
										</div>
										<div class="col-xs-6 col-sm-3 padding">
										  <div class="btn-group btn-default">
										    <button type="button" class="btn btn-default dropdown-toggle"
										            data-toggle="dropdown">
										      Industry
										      <i class="fa fa-chevron-down fa_down" aria-hidden="true"></i>
										    </button>
										    <ul class="dropdown-menu">
										      <li><a href="#">Enlace #1</a></li>
										      <li><a href="#">Enlace #2</a></li>
										    </ul>
										  </div>
										</div>
										<div class="col-xs-6 col-sm-3 padding">
										  <div class="btn-group btn-default">
										    <button type="button" class="btn btn-default dropdown-toggle"
										            data-toggle="dropdown">
										      Languages
										      <i class="fa fa-chevron-down fa_down" aria-hidden="true"></i>
										    </button>
										    <ul class="dropdown-menu">
										      <li><a href="#">Enlace #1</a></li>
										      <li><a href="#">Enlace #2</a></li>
										    </ul>
										  </div>
										</div>
										<div class="col-xs-6 col-sm-3 padding">
										  <div class="btn-group btn-default">
										    <button type="button" class="btn btn-default dropdown-toggle"
										            data-toggle="dropdown">
										      Educational background
										      <span class="fa fa-chevron-down"></span>
										    </button>
										    <ul class="dropdown-menu">
										      <li><a href="#">Enlace #1</a></li>
										      <li><a href="#">Enlace #2</a></li>
										    </ul>
										  </div>
										</div>
									</div>
								</div>
								<form action="" method="POST" id="busqueda" name="busqueda">
									<div class="interest">
										<div class="row">
											<h3>Interest</h3>
											<br>
											<?php if ($list_interest > 0) {
												foreach ($list_interest as $row) {?>
													<div class="col-xs-6 col-sm-4 padding">
														<div class="input-group">
															<input type="text" class="form-control input_group" readonly value="<?php echo $row->title; ?>" id="input_<?php echo $row->id;?>" onclick="checking('<?php echo $row->id;?>');">
															<span class="input-group-addon" onclick="checking('<?php echo $row->id;?>');" data-role="true" id="span_<?php echo $row->id;?>"><input type="checkbox" id="<?php echo $row->id;?>" name="<?php echo $row->id;?>" class="hidden" value="1"><span class="fa fa-check" aria-hidden="true" id="fa_<?php echo $row->id;?>"></span></span>
														</div>
													</div>
												<?php }
											} ?>
										</div>
									</div>
									<div class="interest">
										<div class="row">
											<h3>Skills</h3>
											<br>

											<?php if ($list_skills > 0) {
												foreach ($list_skills as $row) {?>
													<div class="col-xs-6 col-sm-4 padding">
														<div class="input-group">
															<input type="text" class="form-control input_group" readonly value="<?php echo $row->title; ?>" id="input_s_<?php echo $row->id;?>" onclick="checking('s_<?php echo $row->id;?>');">
															 <span class="input-group-addon" onclick="checking('s_<?php echo $row->id;?>');" data-role="true" id="span_s_<?php echo $row->id;?>"><input type="checkbox" id="s_<?php echo $row->id;?>" name="s_<?php echo $row->id;?>" class="hidden" value="1"><span class="fa fa-times" aria-hidden="true" id="fa_s_<?php echo $row->id;?>"></span></span>
														</div>
													</div>


												<?php }
											} ?>
										</div>
									</div>
									<div class="row paddingb">
										<center>
											<button type="submit" class="btn btn-primary button_search">Search</button>
										</center>
									</div>
								</form>
								<div id="resultado">
								</div>
 								<!-- <div class="row persona">
								<div class="col-xs-6 col-sm-9 contenido">
									<div class="col-xs-6 col-sm-3 centrado">
										<img src="external/img/avatar2.jpg" alt="foto de perfil" class="foto_perfilp">
									</div>
									<div class="col-xs-6 col-sm-4 centrado">
										<div class="floating-box2"><span class="nombre">Claudia Sepúlveda</span></div>
										<div class="floating-box2"><span class="profesion">COMM & Marketing</span></div>
									</div>
									<div class="col-xs-6 col-sm-5">
										<div class="floating-box2"><span class="tdtitle bold">Located In -</span> <span class="tdtitle">Australia</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Industry -</span><span class="tdtitle"> Marketing</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Languages -</span><span class="tdtitle"> English / Spanish</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Education background -</span><span class="tdtitle"> Master</span></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 centrado">
									<button type="button" class="btn btn-default btn_connect" onclick="javascript:location.href='<?php echo base_url() ?>connect/user'"><i class="logo">Connect</i>&nbsp;<i class="fa fa-plug logos"></i></button>
								</div>
							</div> -->
							<!-- <hr class="hr">
								<div class="row persona">
								<div class="col-xs-6 col-sm-9 contenido">
									<div class="col-xs-6 col-sm-3 centrado">
										<img src="external/img/avatar2.jpg" alt="foto de perfil" class="foto_perfilp">
									</div>
									<div class="col-xs-6 col-sm-4 centrado">
										<div class="floating-box2"><span class="nombre">Claudia Sepúlveda</span></div>
										<div class="floating-box2"><span class="profesion">COMM & Marketing</span></div>
									</div>
									<div class="col-xs-6 col-sm-5">
										<div class="floating-box2"><span class="tdtitle bold">Located In -</span> <span class="tdtitle">Australia</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Industry -</span><span class="tdtitle"> Marketing</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Languages -</span><span class="tdtitle"> English / Spanish</span></div>
										<div class="floating-box2"><span class="tdtitle bold">Education background -</span><span class="tdtitle"> Master</span></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 centrado">
									<button type="button" class="btn btn-default btn_connect" onclick="activate_modal()"><i class="logo">Connect</i>&nbsp;<i class="fa fa-plug logos"></i></button>
								</div>
							</div>
							<hr class="hr"> -->
						</div>
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
	<script src="<? echo base_url() ?>external/js/connect.js" type="text/javascript" charset="utf-8" async defer></script>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-lg" id="mdialTamanio">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>
