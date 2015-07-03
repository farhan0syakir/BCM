<div class="top-padding text-center">
		<div class="form-login">
			<?php echo form_open("login/process")?>
				<div class="form-group" method="post">
					<input name="username" type ="username" class="form-control" placeholder="Username">
						
				<div class="form-group"  method="post">
					<input name="password" type="password" class="form-control" placeholder="Password">
				
				<div class="form-group text-center">
					<input name="is_remember_me" type="checkbox" value="true">Remember  me
				</div>
						
			
				
				<div class="modal-body">
					<div class="row"> 
							<div class="padding-leftt-narrow text-left col-lg-12">
									<div class="col-lg-12 text-center">
										<button type = "submit" class="button-gap">Login
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</button>
									</div>
								</div>
							</div>
						</div>
                 
				</div>
				<?php if(!empty($error_message)){
					echo $error_message;
				}?>
				<?php echo form_close() ?>