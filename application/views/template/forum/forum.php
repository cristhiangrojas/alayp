<section id="forum">
	
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-md-4 col-lg-4 col-xl-4">
					<<form id="form_search" action="<? echo base_url() ?>forum" method="post">
						<div class="input-group">
							<input type="text"  class="form-control" name="form_value" id="input_buscar" placeholder="Search">
							<div class="input-group-addon" id="search_forum"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color:#fff;"></span></div>
						</div><br />
					</form>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4">
					<button type="button" class="btn btn-primary bottom" id="new_forum" style="">Start New Forum</button>
				</div>
				<div class="col-md-2 col-lg-2 col-xl-2"></div>
			</div>
		</div>
	</div>

	<div class="section_1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8 col-xl-8" id="list_forums">
					<?php
					 foreach ($foros->result() as $key => $f): 
					 	?>
						<a href="<?php echo base_url() ?>forum/detalles_forum/<? echo $f->id ?>" style="text-decoration: none;color:#000;">
						<div class="fondo_noticias">
							<small class="slogan"><? echo $f->nombres; ?></small><br />
							<small><? echo date_forum($f->date); ?></small><br />
							<div class="linea"></div>
							<strong><? echo $f->title ?></strong>
							<p><? echo $f->content ?></p>
						</div>
						<div class="fondo_comments">
							<p>Participate <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 0</p>
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
<div class="modal fade in" id="modal_forum">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center">CREATE FORUM </h4>
			</div>
			<div class="modal-body">
				<form id="form_forum" method="POST" role="form" autocomplete="off">
					<div class="form-group">
						<input type="text" class="form-control" id="title" name="title" value="" placeholder="Title">
					</div>
					<div class="form-group">
						<textarea name="content" id="text_forum" name="content" data-wysihtml5="" placeholder="content..." class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">CREATE</button>
				</form>
				<div id="status_form" style="display: none"></div>	
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<? echo base_url() ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script src="<? echo base_url() ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="<? echo base_url() ?>external/js/pages/forum.js" type="text/javascript" charset="utf-8" async defer></script>