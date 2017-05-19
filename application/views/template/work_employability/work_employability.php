	<section id="work_employability">

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-lg-9 col-xl-9">
						<img src="<?php echo base_url() ?>external/img/work_employability.jpg" class="img-responsive" style="width: 100%;" alt=""/>
					</div>
					<div class="col-md-3 col-lg-3 col-xl-3">
						<div class="fondo_sponsors">
							<h6>Sponsors</h6>
							<?php if ($listado_panel_centro_sponsors > 0) {
								foreach ($listado_panel_centro_sponsors as $row) {?>
									<img src="<?php echo base_url() ?>uploads/work_employability/sponsors/<?php echo $row->imagen;?>" alt="" class="img-responsive" style="width: 100%;">
								<?php }
							} ?>
						</div>
					</div><br />
				</div>
				<div class="row">
					<div class="col-md-9 col-lg-9 col-xl-9">
						<div class="fondo_resumen"><br />
							<ul class="team">
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/circulo_resumen.jpg" alt="" class="img-circle">
							      	<p>Resume</p>
							    </li>
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/circulo_resumen.jpg" alt="" class="img-circle">
							      	<p>Cover Letter</p>
							    </li>
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/circulo_resumen.jpg" alt="" class="img-circle">
							      	<p>Tips</p>
							    </li>
						    </ul>
						    <br />
						</div><br />

						<div class="fondo_work_employability">
						<?php if ($list_jobs > 0) {
							foreach ($list_jobs as $row) {?>
								<div class="row persona">
									<div class="col-sm-9 contenido">
										<div class="col-xs-6 col-sm-9" style="border-right: ridge;">
											<h3 class="profesion"><?php echo $row->title; ?></h3>
											<p><?php echo $row->description ?></p>
										</div>
										<div class=" col-sm-3" style=" margin-top: 13px;">
											<center>
												<h3 class="bold"><?php echo $row->city ?></h3>
												<p><?php echo $row->country ?></p>
											</center>
										</div>
									</div>
									<div class="col-sm-3 apply" >
										<button type="button" class="btn btn-default btn-lg" style=" border-radius: 10px !important;"><span class="profesion">Apply</span></button>
									</div>
								</div>
								<hr class="hr">

							<?php }
						} ?>

						</div>
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-9 col-lg-9 col-xl-9">
						<div class="fondo_work_employability">
							<h4>Job Sites:</h4>
							<ul class="team">
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/job1.jpg" alt="" class="img-responsive">
							    </li>
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/job2.jpg" alt="" class="img-responsive">
							    </li>
							    <li>      
							      	<img src="<?php echo base_url() ?>external/img/job3.jpg" alt="" class="img-responsive">
							    </li>
						    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>