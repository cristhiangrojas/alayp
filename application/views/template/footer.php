	<footer class="footer">
		<div class="container py-4">
			<div class="row">
				<div class="col-md-5 col-lg-5 col-xl-5">
					<a href="<?php echo base_url() ?>home">
						<img src="<?php echo base_url() ?>external/img/logo2.png" alt="Logo" style="margin: 0 auto;">
					</a>
				</div>
				<div class="col-md-5 col-lg-5 col-xl-5">
					<p>Partners</p>
					<?php if (is_logued()): ?>
					<ul class="nav nav-pills nav-stacked">
					 	<li><a href="<? echo base_url() ?>login/logout">SALIR</a></li>
					</ul>	
					<?php endif ?>
				</div>
				<div class="col-md-2 col-lg-2 col-xl-2">
					<ul class="nav nav-pills nav-stacked">
					 	<li><a href="">Contact</a></li>
					 	<li><a href="">Email</a></li>
					 	<li><a href="">Linkedln</a></li>
					 	<li><a href="">Youtube</a></li>
					 	<li><a href="">Facebook</a></li>
					 	<li><a href="">Volunteer with ALAYP</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>external/js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>external/js/jquery.smartmenus.bootstrap.js"></script>
</body>
</html>