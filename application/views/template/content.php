<section id="inicio">
		<div class="section_1">
			<img src="<?php echo base_url() ?>external/img/fondo.jpg" alt="" class="img_fondo_secciones">
		</div>

		<div class="section_2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-6"> 
						<img src="<?php echo base_url() ?>external/img/icon4.jpg" alt="" class="img-responsive" style="margin: 0 auto;padding: 2em 0;">
					</div>
					<div class="col-md-6 col-lg-6 col-xl-6"> 
						<img src="<?php echo base_url() ?>external/img/icon5.jpg" alt="" class="img-responsive" style="margin: 0 auto;padding: 2em 0;">
						<!-- <div id='contador'></div> -->
					</div>
				</div>
			</div>
		</div>

		<div class="section_3">
			<div class="container">
				<div class="row-fluid"> 
				    <ul class="team">
					    <li>      
					      	<img src="<?php echo base_url() ?>external/img/work.png" alt="Work" class="center-block">
					    </li>
					    <li>
					      	<img src="<?php echo base_url() ?>external/img/connect.png" alt="Connect" class="center-block">
					    </li>
					    <li> 
					      	<img src="<?php echo base_url() ?>external/img/business.png" alt="Business" class="center-block">
					    </li>
					    <li> 
					      	<img src="<?php echo base_url() ?>external/img/live.png" alt="Live" class="center-block img-responsive">
					    </li>
				    </ul>
				</div>
				<div class="bottom">
					<button type="button" class="btn btn-primary btn-lg">Find Out More</button>
				</div>
			</div>
		</div>

		<div class="section_4">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-8">
						<div class="thumbnail">
					      	<img class="img-responsive" src="<?php echo base_url() ?>external/img/banner.png" alt="">
					      	<div class="caption">
					        	<h3>Lorem Ipsum Dolor</h3>
					        	<p>Consectetur adipiscing elit</p>
					        	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maximus. Vestibulum sapien ex, varius nec bibendum a, eleifend sit amet odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maximus. Vestibulum sapien ex, varius nec bibendum a, eleifend sit amet odio.</p>
					      	</div>
					    </div>
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="botones">
							<button type="button" class="btn btn-primary btn-lg boton">History</button><br /><br />
							<button type="button" class="btn btn-primary btn-lg boton">Team</button><br /><br />
							<button type="button" class="btn btn-primary btn-lg boton">Chapters</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
	<?php
		foreach ($fecha_principal as $row) {
			$fecha_final = $row->date;
		}
	?>
		$(function(){
			$.ajax({
				type: 'POST',
				url: base_url+'home/traer_fecha',
				data: '',
				success: function(a) {
					console.log(a)
				},
				error: function() {
					console.log("nada");
				}
			});
		})
	</script>