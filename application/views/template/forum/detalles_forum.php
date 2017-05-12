<section id="forum">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-lg-2 col-xl-2"></div>
				<div class="col-md-4 col-lg-4 col-xl-4">
					<form id="form_search" action="<? echo base_url() ?>forum" method="post">
						<div class="input-group">
							<input type="text"  class="form-control" name="form_value" id="input_buscar" placeholder="Search">
							<div class="input-group-addon" id="search_forum"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color:#fff;"></span></div>
						</div><br />
					</form>
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
				<div class="col-md-8 col-lg-8 col-xl-8" id="list_forums">
					<div class="fondo_noticias">
						<small class="slogan"><? echo $head->nombres; ?></small><br />
						<small><? echo date_forum($head->date); ?></small><br />
						<div class="linea"></div>
						<strong><? echo $head->title; ?></strong>
						<p><? echo $head->content ?></p>
					</div>
					<span class="fondo_reply" id="reply_forum">Reply</span><br /><br />
					<?php foreach ($replys->result() as $key => $r): ?>
						<div class="fondo_noticias">
							<div class="forum_details">
								<small class="slogan"><? echo $r->nombres; ?></small><br />
								<small><? echo date_forum($r->date) ?></small><br />
								<p><? echo $r->content; ?></p>
							</div>
							<div class="linea"></div>
						</div><br />
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
				<h4 class="modal-title text-center">REPLY </h4>
			</div>
			<div class="modal-body">
				<form id="form_forum" method="POST" role="form" data-id="<? echo $head->id; ?>" autocomplete="form">
					<div class="form-group">
						<textarea name="content" id="text_forum" data-wysihtml5="" placeholder="content..." class="form-control"></textarea>
					</div>
					<input type="hidden" name="id" value="<? echo $head->id; ?>">
					<button type="submit" class="btn btn-primary">Reply</button>
				</form>
				<div id="status_form" style="display: none"></div>	
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<? echo base_url() ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script src="<? echo base_url() ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="<? echo base_url() ?>external/js/pages/forum_details.js" type="text/javascript" charset="utf-8" async defer></script>