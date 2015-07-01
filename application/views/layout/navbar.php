<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php#page-top">
			<img src="<?php echo base_url('assets/images/logo.png')?>"/>
			</a>
        </div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right dropdown">
				<li class="login" >
					 <a class="page-scroll" id='modal-launcher' data-toggle="modal" data-target="#login"> LOGIN</a>
				 </li>
			</ul>
		</div>
    </div>
</nav>

    <div id="login" class="modal fade" role="dialog">
                  <div class="top-padding modal-dialog text-center">
					<div class="modal-content">
						 <div class="modal-header">
								<h3 class="title">Login to Your Account</h3>
						</div>
					<div class="form-login">
						<div class="form-group">
							<input type ="username" class="form-control" placeholder="Username">
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						
						<div class="bottom-gap modal-body">
							<div class="row"> 
								<div class="padding-leftt-narrow text-left col-lg-12">
									<div class="col-lg-12 text-center">
										<a class="button-gap">Login
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
          </div>
	</div>