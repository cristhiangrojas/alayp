	<section id="newsfeed">

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-8">
						<?php 
						
							if ($pagin != FALSE) 
							{
								foreach ($pagin as $row) 
								{
									?>
										<div class="fondo_noticias">
											<small class="slogan"><?php echo $row->sello;?></small><br />
											<small><?php echo $row->fecha_hora;?></small><br />
											<div class="linea"></div>
											<strong><?php echo $row->titulo;?></strong>
											<p><?php echo $row->descripcion;?></p>
											<!--<div class="fondo_imagen">
												<img src="<?php echo base_url() ?>uploads/newsfeed/panel_centro/<?php echo $row->imagen; ?>" alt="" class="img-responsive" style="width: 100%;">
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
															<img src="<?php echo base_url() ?>uploads/newsfeed/panel_centro/<?php echo $row->imagen; ?>" alt="" class="img-responsive" style="width: 100%;">
														</div><br />
													<?php
												}
											?>
											<p>Comment <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 9</p>
										</div><br />
									<?php
								}
							}else{
								?>
									<div class="fondo_noticias">
										<h1>No hay registros</h1>
									</div>
								<?php
							}
							
						?>

						<center><?php echo $this->pagination->create_links() ?></center>
						<!--<div class="fondo_noticias">
							<small class="slogan">ALAYP</small><br />
							<small>September 20 2016 at 4:45 pm</small><br />
							<div class="linea"></div>
							<strong>2016 Latin American Colloquium</strong>
							<p>If you haven't yet, there is still time to register in the 10th Annual Latin American Colloquium hosted by The University of Queensland , overreaching the theme 'A decade of collaboration and innovation</p>
							<div class="fondo_imagen">
								<img src="<?php echo base_url() ?>external/img/newsfeed.jpg" class="img-responsive" style="width: 100%;" alt=""/>
							</div><br />
							<p>Comment <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 9</p>
						</div><br />
						<div class="fondo_noticias">
							<small class="slogan">ALAYP</small><br />
							<small>September 20 2016 at 4:45 pm</small><br />
							<div class="linea"></div>
							<strong>2016 Latin American Colloquium</strong>
							<p>If you haven't yet, there is still time to register in the 10th Annual Latin American Colloquium hosted by The University of Queensland , overreaching the theme 'A decade of collaboration and innovation</p>
							<div class="fondo_imagen">
								<img src="<?php echo base_url() ?>external/img/newsfeed1.jpg" class="img-responsive" style="width: 100%;" alt=""/>
							</div><br />
							<p>Comment <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 9</p>
						</div><br />!-->
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="fondo_sponsors">
							<h6>Sponsors</h6>
							<!--<img src="<?php echo base_url() ?>external/img/sponsors.jpg" alt="" class="img-responsive" style="width: 100%;">
							<img src="<?php echo base_url() ?>external/img/sponsors1.jpg" alt="" class="img-responsive" style="width: 100%;">!-->
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