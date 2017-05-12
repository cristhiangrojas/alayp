	<section id="forum">
		
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-xl-2"></div>
					<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="input-group">
							<input type="text" class="form-control" id="input_buscar" placeholder="Search">
							<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color:#fff;"></span></div>
						</div><br />
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4">
						<button type="button" class="btn btn-primary bottom" style="">Start New Forum</button>
					</div>
					<div class="col-md-2 col-lg-2 col-xl-2"></div>
				</div>
			</div>
		</div>

		<div class="section_1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-8">
						<?php foreach ($foros as $key => $f): ?>
							<a href="<?php echo base_url() ?>forum/detalles_forum" style="text-decoration: none;color:#000;">
							<div class="fondo_noticias">
								<small class="slogan">Claudia Sepúlveda</small><br />
								<small>September 20 2016 at 4:45 pm</small><br />
								<div class="linea"></div>
								<strong>Lorem ipsum dolor sit amet?</strong>
								<p>consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim Vestibulum sapien ex, varius nec bibendum a, eleifend sit amet odio......</p>
							</div>
							<div class="fondo_comments">
								<p>Participate <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 20</p>
							</div><br />
							</a>
						<?php endforeach ?>
						
						
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4">
						<div class="fondo_sponsors">
							<h6>Sponsors</h6>
							<img src="<?php echo base_url() ?>external/img/sponsors.jpg" alt="" class="img-responsive" style="width: 100%;">
							<img src="<?php echo base_url() ?>external/img/sponsors1.jpg" alt="" class="img-responsive" style="width: 100%;">
						</div><br />
						<div class="fondo_sponsors">
							<h6>Connect</h6>
							<img src="<?php echo base_url() ?>external/img/connect.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>