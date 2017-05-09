	<section id="starting">

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-lg-3 col-xl-3">
						<div class="fondo_columna1">
							<div class="circulo">
								<img src="<?php echo base_url() ?>external/img/circulo.jpg" alt="..." class="img-circle"><br /><br />
								<div class="linea"></div><br />
								<img src="<?php echo base_url() ?>external/img/circulo1.jpg" alt="..." class="img-circle"><br /><br />
								<div class="linea"></div><br />
								<img src="<?php echo base_url() ?>external/img/circulo2.jpg" alt="..." class="img-circle">
							</div>
						</div><br />

						<div class="fondo_columna1">
							<div class="linea"></div>
							<a href="#">Business Structure</a>
							<div class="linea"></div>
							<a href="#">Importing Australia</a>
							<div class="linea"></div>
							<a href="#">Exporting Australia</a>
							<div class="linea"></div>
							<a href="#">Business Structure</a>
							<div class="linea"></div>
							<a href="#">Importing Latin America</a>
							<div class="linea"></div>
							<a href="#">Exporting Latin America</a>
							<div class="linea"></div><br />
						</div><br />
					</div>
					<div class="col-md-6 col-lg-6 col-xl-6">

						<div class="fondo_imagen">
							<img src="<?php echo base_url() ?>external/img/starting.jpg" class="img-responsive" style="width: 100%;" alt=""/>
						</div><br />

						<?php 
						
							if ($pagin != FALSE) 
							{
								foreach ($pagin as $row) 
								{
									?>
										<div class="fondo_starting">
											<small><?php echo $row->fecha_hora;?></small><br />
											<div class="linea"></div>
											<strong><?php echo $row->titulo;?></strong>
											<p><?php echo $row->descripcion;?></p>
											<!--<div class="fondo_imagen">
												<img src="<?php echo base_url() ?>uploads/starting_business/panel_centro/<?php echo $row->imagen; ?>" class="img-responsive" style="width: 100%;" alt=""/>
											</div><br />!-->
											<?php 
												if ($row->link == true)
												{
													?>
														<div class="fondo_imagen">
															<div class="embed-responsive embed-responsive-4by3">
									                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row->link; ?>"></iframe>
									                        </div>
								                        </div><br />
													<?php
												}else{
													?>
														<div class="fondo_imagen">
															<img src="<?php echo base_url() ?>uploads/starting_business/panel_centro/<?php echo $row->imagen; ?>" alt="" class="img-responsive" style="width: 100%;">
														</div><br />
													<?php
												}
											?>
										</div><br />
									<?php
								}

							}else{
								?>
									<div class="fondo_starting">
										<h1>No hay registros</h1>
									</div>
								<?php
							}
							
						?>

						<center><?php echo $this->pagination->create_links() ?></center>
							<!--<div class="fondo_imagen">
								<img src="<?php echo base_url() ?>external/img/starting.jpg" class="img-responsive" style="width: 100%;" alt=""/>
							</div><br />
							<div class="fondo_starting">
								<small>September 20 2016 at 4:45 pm</small><br />
								<div class="linea"></div>
								<strong>Lorem ipsum dolor sit amet</strong>
								<p>If you haven't yet, there is still time to register in the 10th Annual Latin American Colloquium hosted by The University of Queensland , overreaching the theme 'A decade of collaboration and innovation</p>
								<div class="fondo_imagen">
									<img src="<?php echo base_url() ?>external/img/starting1.jpg" class="img-responsive" style="width: 100%;" alt=""/>
								</div><br />
							</div><br />
							
							<div class="col-md-6 col-lg-6 col-xl-6">
								<div class="thumbnail">
								    <img src="<?php echo base_url() ?>external/img/starting3.jpg" alt="...">
								    <div class="caption">
								       	<h3>New to business?</h3>
								        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit at diam.</p>
								      </div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-6">
								<div class="thumbnail">
								    <img src="<?php echo base_url() ?>external/img/starting4.jpg" alt="...">
								    <div class="caption">
								       	<h3>New to business?</h3>
								        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit at diam.</p>
								      </div>
								</div>
							</div>

							<div class="fondo_starting">
								<small>September 20 2016 at 4:45 pm</small><br />
								<div class="linea"></div>
								<strong>Lorem ipsum dolor sit amet</strong>
								<div class="fondo_imagen">
									<img src="<?php echo base_url() ?>external/img/starting2.jpg" class="img-responsive" style="width: 100%;" alt=""/>
								</div><br />
							</div><br />!-->
					</div>
					<div class="col-md-3 col-lg-3 col-xl-3">
						<div class="fondo_sponsors">
							<h6>Sponsors</h6>
							<!--<img src="<?php echo base_url() ?>external/img/sponsors.jpg" alt="" class="img-responsive" style="width: 100%;">
							<img src="<?php echo base_url() ?>external/img/sponsors1.jpg" alt="" class="img-responsive" style="width: 100%;">!-->
							<?php 

				                if ( count($listado_panel_centro_sponsors) > 0 ) 
				                {
				                  foreach ($listado_panel_centro_sponsors as $row)
				                  {
				                    echo '<img src="'.base_url().'uploads/starting_business/panel_derecha/sponsors/'.$row->imagen.'" class="img-responsive" style="width: 100%;" />';
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