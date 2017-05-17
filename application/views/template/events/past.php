	<section id="past">
		<div class="section_1">
			<img src="<?php echo base_url() ?>external/img/past.jpg" alt="" class="img_fondo_secciones">
		</div>
		<?php 
		if ($events_past > 0) {
			$section = 2;
			foreach ($events_past as $row) {
				?>
					<div class="section_<?php echo $section;?>">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<h1><?php echo $row->title; ?></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php if ($row->image != "") {
										?>
											<img src="<?php echo base_url() ?>uploads/events/backgrounds/<?php echo $row->image; ?>" alt="" class="img-responsive"><br />
										<?php 
									}
									if ($section == 2) {
										$section = 3;
									}else {
										$section = 2;
									} ?>
									<p><?php echo $row->description; ?></p>
								</div>
								<div class="col-lg-6 text-center">
									<p>SPEAKERS</p>
									<?php 
										$conferencistas = $this->newsfeed_ml->conferencistas($row->conferencist);
										foreach ($conferencistas as $key) {
											?>
												<strong><?php echo $key->name; ?></strong>
												<p><?php echo $key->profession; ?></p>
												<span class="fa fa-linkedin"></span><br /><br />
											<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>

				<?php
			}
		}
		?>
	</section>