	<section id="upcoming">
		<div class="section_1">
			<img src="<?php echo base_url() ?>external/img/upcoming.jpg" alt="" class="img_fondo_secciones">
		</div>
		<?php 
		if ($eventos_proximos > 0) {
			foreach ($eventos_proximos as $row) {
				$total_conferencistas = $this->newsfeed_ml->total_conferencistas($row->conferencist);
				$conferencistas = $this->newsfeed_ml->conferencistas($row->conferencist);
				if ($total_conferencistas == 1) {
					$rows = 12;
				}elseif ($total_conferencistas == 2) {
					$rows = 6;
				}elseif ($total_conferencistas == 3) {
					$rows = 4;
				}elseif ($total_conferencistas == 4) {
					$rows = 3;
				}elseif ($total_conferencistas == 5) {
					$rows = 2;
				}elseif ($total_conferencistas == 6) {
					$rows = 2;
				}else {
					$rows = 1;
				}
				?>
					<div class="section_2">
						<div class="container">
							<h1 class="text-center">SPEAKERS</h1>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />Nam id elit consequat felis sagittis pulvinar sit amet at diam.</p>
							<div class="row text-center team">
							<?php foreach ($conferencistas as $key) {?>
								<div class="col-lg-<?php echo $rows;?>">
									<img class="img-circle" src="<?php echo base_url() ?>uploads/events/speakers/<?php echo $key->photo;?>" alt="">
									<h6><?php echo $key->name;?></h6>
									<strong><?php echo $key->profession;?></strong>
									<p><?php echo $key->description;?></p>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
					<div class="section_3">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<h4><?php echo $row->title; ?></h4>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<p class="text-justify"><?php echo $row->description; ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="section_4">
						<div class="fondo_imagen"></div>
					</div>
				<?php
			}
		}
		?>		
	</section>