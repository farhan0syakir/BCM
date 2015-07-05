<div class="top-padding text-center">
		<h4>Login to Your Account</h4>
		<div class="form-login">
			<?php echo form_open("login/process")?>
				<div class="form-group" method="post">
					<input  name="username" type ="username" class="top-gap form-control" placeholder="Username">
				</div>
				<div class="form-group"  method="post">
					<input  name="password" type="password" class="top-gap-narrow form-control" placeholder="Password">
				</div>
				<div class="top-gap-narrow form-group text-left">
					<input name="is_remember_me" class="top-gap" type="checkbox" value="true"> Remember  me
				</div>
						
			
				
				<div class="modal-body">
					<div class="row"> 
							<div class="padding-leftt-narrow text-left col-lg-12">
									<div class="col-lg-12 text-center">
										<a type = "submit" class="button-gap">Login 
											<span class="left-gap glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
                 
				</div>
</div>
				<?php if(!empty($error_message)){
					echo $error_message;
				}?>
				<?php echo form_close() ?>