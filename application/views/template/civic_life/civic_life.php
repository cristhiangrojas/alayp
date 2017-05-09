	<section id="starting">

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-lg-9 col-xl-9">
						<img src="<?php echo base_url() ?>external/img/civil_life.jpg" class="img-responsive" style="width: 100%;" alt=""/>
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
				                    echo '<img src="'.base_url().'uploads/civil_life/panel_derecha/sponsors/'.$row->imagen.'" class="img-responsive" style="width: 100%;" />';
				                  }
				                }else{
				                  echo "";
				                }

				              ?>
						</div>
					</div><br />
				</div>
				<div class="row">
					<div class="col-md-2 col-lg-2 col-xl-2">
						<div class="fondo_columna1">
							<div class="linea"></div>
							<a href="#">Translink</a>
							<div class="linea"></div>
							<a href="#">Bank</a>
							<div class="linea"></div>
							<a href="#">Post Office</a>
							<div class="linea"></div>
							<a href="#">Library</a>
							<div class="linea"></div>
							<a href="#">Caps and Uber</a>
							<div class="linea"></div>
							<a href="#">Airport</a>
							<div class="linea"></div><br />
						</div><br />

						<div class="bottom">
							<button type="button" class="btn btn-primary btn-lg">Forum</button>
						</div>
					</div>
					<div class="col-md-7 col-lg-7 col-xl-7">
						<!--<div class="fondo_starting">
								<small>September 20 2016 at 4:45 pm</small><br />
								<div class="linea"></div>
								<strong>Lorem ipsum dolor sit amet</strong>
								<p>If you haven't yet, there is still time to register in the 10th Annual Latin American Colloquium hosted by The University of Queensland , overreaching the theme 'A decade of collaboration and innovation</p>
								<div class="fondo_imagen">
									<img src="<?php echo base_url() ?>external/img/starting1.jpg" class="img-responsive" style="width: 100%;" alt=""/>
								</div><br />
						</div><br />

						<div class="fondo_starting">
								<small>September 20 2016 at 4:45 pm</small><br />
								<div class="linea"></div>
								<strong>Lorem ipsum dolor sit amet</strong>
								<div class="fondo_imagen">
									<img src="<?php echo base_url() ?>external/img/starting2.jpg" class="img-responsive" style="width: 100%;" alt=""/>
								</div><br />
						</div><br />!-->
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
												<img src="<?php echo base_url() ?>uploads/civil_life/panel_centro/<?php echo $row->imagen; ?>" class="img-responsive" style="width: 100%;" alt=""/>
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
															<img src="<?php echo base_url() ?>uploads/civil_life/panel_centro/<?php echo $row->imagen; ?>" alt="" class="img-responsive" style="width: 100%;">
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
					</div>
				</div>
			</div>
		</div>
	</section>