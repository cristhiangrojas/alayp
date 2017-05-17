	<section id="events">
		<div class="section_1">
			<img src="<?php echo base_url() ?>external/img/upcoming.jpg" alt="" class="img_fondo_secciones">
		</div>
		
		<div class="section_2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-6"> 
						<img src="<?php echo base_url() ?>external/img/icon4.jpg" alt="" class="img-responsive" style="margin: 0 auto;padding: 2em 0;">
					</div>
					<div class="col-md-6 col-lg-6 col-xl-6 texto">
					<?php $evento_principal = $this->newsfeed_ml->evento_principal();
						foreach ($evento_principal as $key) {?>
						<h3><?php echo $key->title; ?></h3>
						<strong><?php echo $key->date; ?></strong><br /><br />
						<p><?php echo $key->description;?></p>
						<?php }
					?>
					</div>
				</div>
			</div>
		</div>


<?php foreach ($evento_principal as $key) {
	$id_fuera = $key->id;
	$total_conferencistas = $this->newsfeed_ml->total_conferencistas($key->conferencist);
	$conferencistas = $this->newsfeed_ml->conferencistas($key->conferencist);
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
<div class="section_3">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xl-6">
				<?php if($key->image != "") { ?>
					<img src="<?php echo base_url() ?>uploads/events/backgrounds/<?php echo $key->image?>" alt="" class="img-responsive">
				<?php } ?>
				<h3><?php echo $key->title; ?></h3>
				<strong><?php echo $key->date; ?></strong>
				<p><?php echo $key->description; ?></p>
			</div>
			<div class="col-md-6 col-xl-6">
				<h1 class="text-center">SPEAKERS</h1>
				<?php foreach ($conferencistas as $key2) {?>
					<div class="col-md-<?php echo $rows; ?> col-xl-<?php echo $rows; ?> text-center team">
						<img class="img-circle" src="<?php echo base_url() ?>uploads/events/speakers/<?php echo $key2->photo;?>" alt="" style="height: 200px;">
						<h6><?php echo $key2->name;?></h6>
						<strong><?php echo $key2->profession;?></strong>
						<p><?php echo $key2->description;?></p>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="bottom">
			<button type="button" class="btn btn-primary btn-lg" onclick="javascrpt:$('#mas_eventos').css('display','');$('#find').css('display','none');" id="find">Find Out More</button>
		</div>
	</div>
</div>
<?php } ?>
<div id="mas_eventos" style="display: none;">
		<?php 
		$eventos_principales = $this->newsfeed_ml->eventos_principales();
		foreach ($eventos_principales as $row) {
			if ($row->id != $id_fuera) {
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
			<div class="section_3">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xl-6">
							<?php if($row->image != "") { ?>
								<img src="<?php echo base_url() ?>uploads/events/backgrounds/<?php echo $row->image?>" alt="" class="img-responsive">
							<?php } ?>
							<h3><?php echo $row->title; ?></h3>
							<strong><?php echo $row->date; ?></strong>
							<p><?php echo $row->description; ?></p>
						</div>
						<div class="col-md-6 col-xl-6">
							<h1 class="text-center">SPEAKERS</h1>
							<?php foreach ($conferencistas as $key) {?>
							<div class="col-md-<?php echo $rows; ?> col-xl-<?php echo $rows; ?> text-center team">
								<img class="img-circle" src="<?php echo base_url() ?>uploads/events/speakers/<?php echo $key->photo;?>" alt="" style="height: 200px;">
								<h6><?php echo $key->name;?></h6>
								<strong><?php echo $key->profession;?></strong>
								<p><?php echo $key->description;?></p>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php }} ?>
</div>



<?php 
$evento_secundario = $this->newsfeed_ml->evento_secundario();
if ($evento_secundario > 0) {$ids = array();?>
	<div class="section_4">
		<div class="container">
			<div class="row">
				<div class="text-center team">
					<?php foreach ($evento_secundario as $row) {
						$ids[] = $row->id;
						?>
						<div class="col-lg-4 col-xl-4">
							<img class="img-responsive" src="<?php echo base_url() ?>uploads/events/backgrounds/<?php echo $row->image;?>" alt="" style="width: 100%;">
							<div class="texto">
								<p><?php echo $row->title;?></p>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
			<?php if (count($evento_secundario) >= 3) {?>
				<div class="bottom">
					<button type="button" class="btn btn-primary btn-lg" onclick="javascrpt:$('#mas_eventos2').css('display','');$('#find2').css('display','none');" id="find2">Find Out More</button>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<div id="mas_eventos2" style="display: none;">
<?php 

$eventos_secundarios = $this->newsfeed_ml->eventos_secundarios($ids);
// for ($i=0; $i <= count($eventos_secundarios) ; $i++) { 
// 	if (fmod($i, 3) == 0) {
// 		?>
 		<!-- 	<div class="text-center team">
 			</div>
 --> 		

 <?php
// 	}
// }

if ($eventos_secundarios > 0) {?>

 <?php $ids_sec = $ids;for ($a=0; $a < count($eventos_secundarios) ; $a++) {
if (count($ids_sec) > 0) {
	$eventos_secundarios = $this->newsfeed_ml->eventos_secundarios($ids_sec);
}
  ?>
	<div class="section_4">
		<div class="container">
			<div class="row">
				<div class="text-center team">
					<?php $i = 0; if ($eventos_secundarios > 0) {
							foreach ($eventos_secundarios as $row) {?>
						<div class="col-lg-4 col-xl-4">
							<img class="img-responsive" src="<?php echo base_url() ?>uploads/events/backgrounds/<?php echo $row->image;?>" alt="" style="width: 100%;">
							<div class="texto">
								<p><?php echo $row->title;?></p>
							</div>
						</div>
						<?php $ids_sec[] = $row->id; if(++$i == 3) {break;}
						}?>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
<?php } ?> 
<?php } ?>
</div>
<!-- 		<div class="section_4">
			<div class="container">
				<div class="row">
					<div class="text-center team">
						<div class="col-lg-4 col-xl-4">
							<img class="img-responsive" src="<?php echo base_url() ?>external/img/events_1.jpg" alt="" style="width: 100%;">
							<div class="texto">
								<p>LAUNCH EVENT</p>
							</div>
						</div>
						<div class="col-lg-4 col-xl-4">
							<img class="img-responsive" src="<?php echo base_url() ?>external/img/events_2.jpg" alt="" style="width: 100%;">
							<div class="texto">
								<p>2014 XMAS PARTY</p>
							</div>
						</div>
						<div class="col-lg-4 col-xl-4">
							<img class="img-responsive" src="<?php echo base_url() ?>external/img/events_3.jpg" alt="" style="width: 100%;">
							<div class="texto">
								<p>BNE POLO HOUSE</p>
							</div>
						</div>
					</div>
				</div>

				<div class="bottom">
					<button type="button" class="btn btn-primary btn-lg">Find Out More</button>
				</div>
			</div>
		</div> -->

		
	</section>