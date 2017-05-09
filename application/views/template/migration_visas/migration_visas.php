	<section id="migration_visas">

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-lg-3 col-xl-3">
						<div class="fondo_columna1">
							<h1>VISAS</h1>
							<div class="linea"></div>
							<strong>Australian Citizenship</strong>
							<img src="<?php echo base_url() ?>external/img/visas2.jpg" class="img-responsive" style="width: 100%;" alt=""/>
							<p>Integer bibendum enim Vestibulum sapien ex, eleifend sit amet odio</p><br />

							<div class="linea"></div>
							<strong>Australian Citizenship</strong>
							<img src="<?php echo base_url() ?>external/img/visas3.jpg" class="img-responsive" style="width: 100%;" alt=""/>
							<p>Integer bibendum enim Vestibulum sapien ex, eleifend sit amet odio</p>
						</div><br />

						<div class="fondo_columna1">
							<div class="linea"></div>
							<a href="#">Student Visa</a>
							<div class="linea"></div>
							<a href="#">Woking Holiday</a>
							<div class="linea"></div>
							<a href="#">Resident Ship</a>
							<div class="linea"></div>
							<a href="#">Citizen Ship</a>
							<div class="linea"></div><br />
						</div><br />
					</div>
					<div class="col-md-6 col-lg-6 col-xl-6">
						<?php 
						
							if ($pagin != FALSE) 
							{
								foreach ($pagin as $row) 
								{
									?>
										<div class="fondo_migration_visas">
											<small><?php echo $row->fecha_hora;?></small><br />
											<div class="linea"></div>
											<strong><?php echo $row->titulo;?></strong>
											<p><?php echo $row->descripcion;?></p>
											<!--<div class="fondo_imagen">
												<img src="<?php echo base_url() ?>uploads/migration_visas/panel_centro/<?php echo $row->imagen; ?>" class="img-responsive" style="width: 100%;" alt=""/>
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
															<img src="<?php echo base_url() ?>uploads/migration_visas/panel_centro/<?php echo $row->imagen; ?>" alt="" class="img-responsive" style="width: 100%;">
														</div><br />
													<?php
												}
											?>
										</div><br />
									<?php
								}

							}else{
								?>
									<div class="fondo_migration_visas">
										<h1>No hay registros</h1>
									</div>
								<?php
							}
							
						?>

						<center><?php echo $this->pagination->create_links() ?></center>
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
				                    echo '<img src="'.base_url().'uploads/migration_visas/panel_derecha/sponsors/'.$row->imagen.'" class="img-responsive" style="width: 100%;" />';
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