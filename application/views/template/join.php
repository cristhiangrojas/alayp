	<section id="join">
		<div class="section_1">
			<img src="<?php echo base_url() ?>external/img/join.jpg" alt="" class="img_fondo_secciones">
		</div>
		<div class="section_2">
			<div class="container">
				<div class="row text-center team">
					<div class="col-lg-4">
						<img class="img-circle" src="<?php echo base_url() ?>external/img/icono.jpg" alt="">
						<h4>CONNECT WITH OTHERS</h4>
						<strong>IN LATIN AMERICA & AUSTRALIA</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam.</p>
					</div>
					<div class="col-lg-4">
						<img class="img-circle" src="<?php echo base_url() ?>external/img/icono1.jpg" alt="">
						<h4>BUSINESS & ENTREPRENEURSHIP</h4>
						<strong>DEVELOPMENT</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam.</p>
					</div>
					<div class="col-lg-4">
						<img class="img-circle" src="<?php echo base_url() ?>external/img/icono2.jpg" alt="">
						<h4>CROSS-REGION OPPORTUNITIES</h4>
						<strong>IN LATIN AMERICA & AUSTRALIA</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam.</p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="section_3">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-1"></div>
					<div class="col-lg-5 fondo_contenedor">
						<div class="header">
							<p class="titulo">INDIVIDUAL</p>
							<p>As a professional or as an entrepreneur</p>
						</div>
						<div class="contenido"><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p>
						</div>
						<div class="bottom">
							<button type="button" id="show_form" data-level="single" class="btn btn-primary btn-lg">Sign Up</button>
						</div><br />
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-5 fondo_contenedor">
						<div class="header">
							<p class="titulo">COMPANY/ ORGANISATION</p>
							<p>&nbsp;</p>
						</div>
						<div class="contenido"><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p><br />
							<p>Find Out More</p>
						</div>
						<div class="bottom">
							<button type="button" id="show_form" data-level="business" class="btn btn-primary btn-lg">Sign Up</button>
						</div><br />
					</div>
					
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">INDIVIDUAL</h4>
					</div>
					<div class="modal-body">
						<form id="form_signup" autocomplete="off">
							<div class="bottom" id="type_single">
								<button type="button" id="btn_level" class="btn btn-primary" data-level="professional">Professional</button>
								<button type="button" id="btn_level" class="btn btn-primary" data-level="entrepreneur">Entrepreneur</button><br /><br />
							</div>
							<div class="contenido">
									<div class="form-group relative">
										<label class="control-label" id="status_user" style="display: none">Input with success</label>
										<input type="text" name="user" class="form-control" id="user" placeholder="User" required>
										<span class="form-control-feedback" id="icon_user" style="display: none;"><i class="fa fa-check"></i></span>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="re_password" class="form-control" id="re_password" placeholder="Retype password" required>
									</div>
									<hr>
									<div class="form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Full name" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<select name="country" id="country" class="form-control">
											<option value="">Country of Origin</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" name="date_born" class="form-control" id="date_born" placeholder="Date of birth Day / Month / Year">
									</div>
									<div class="form-group">
										<input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation">
									</div>
									<div class="form-group">
										<select name="industry" id="industry" class="form-control">
											<option value="">Industry</option>
										</select>
									</div>
									<div class="form-group">
										<select name="educational" id="educational" class="form-control">
											<option value="">Educational background</option>
										</select>
									</div>
									<div class="form-group">
										<select name="languages" id="languages" class="form-control">
											<option value="">Languages</option>
										</select>
									</div>

									<div class="form-group">
										<textarea class="form-control" name="interests" id="interests" rows="5" placeholder="Interests"></textarea>
									</div>
									<input type="hidden" id="level_single" name="level_single" value="">
									<input type="hidden" id="level_user" name="level_user" value="">
							</div>
							<div class="bottom">
								<button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="sign_in_ok" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="contenido register_ok">
							<h3 class="text-center">Welcome</h3>
							<h4 class="text-center">Thank to be part of ALAYP!</h4>
							<p class="text-center">A confirmation email has been sent. <br/>Check your mail box and follow the instructions to activate your account.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_4">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h3>Terms and Conditions.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maxi</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maxi</p>
					</div>	
					<div class="col-lg-6">
						<h3>FAQs</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maxi</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id elit consequat felis sagittis pulvinar sit amet at diam. Donec sodales nec augue eu gravida. Integer bibendum enim sit amet varius maxi</p>
					</div>				
				</div>
				<div class="bottom">
					<button type="button" class="btn btn-primary btn-lg">Find Out More</button>
				</div>
			</div>
		</div>
	</section>
	<script src="<? echo base_url() ?>external/js/pages/join.js?<? echo strtotime(date('Y-m-d H:i:s')); ?>" type="text/javascript" charset="utf-8" async defer></script>