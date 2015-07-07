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
			<img class="logo" src="<?php echo base_url('assets/images/logo.png')?>"/>
			</a>
        </div>
		<?php if(!empty($this->session->userdata('logged_in'))){ ?>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right dropdown">
				<div class="top-padding-narrow btn-group">
				<li class="no-padding" data-toggle="dropdown" data-target="#approval" >
                    <a href="#"><img class="notif" src="<?php echo base_url('assets/images/approve.png')?>"></a>
                </li>
                <ul class="dropdown-menu" >
					    <li class="text-left"><a href="#">Business Activity TCM-006 you created has been approved<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">View</p></a></li>
					     <li class="text-left"><a href="#">Business Activity TCM-005 you created has been approved<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">View</p></a></li>
					     <li class="text-left"><a href="#">Business Activity TCM-004 you created has been approved<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">View</p></a></li>
					    <li role="separator" class="divider"></li>
					    <li class="text-center"><a href="#">List of Approvals<span class="left-gap glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> </a></li>
				</ul>
				</div>

                <div class="top-padding-narrow btn-group">
	                <li  class="no-padding " data-toggle="dropdown" data-target="#notification">
	                    <a class="no-padding " href="#"><img class="notif" src="<?php echo base_url('assets/images/notif.png')?>"></a>
	                </li>
	                <ul class="dropdown-menu" >
					    <li class="text-left"><a href="#">SOP for Fire has been activated<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">See instructions</p></a></li>
					    <li class="text-left"><a href="#">SOP for Flood has been activated<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">See instructions</p></a></li>
					    <li class="text-left"><a href="#">SOP for System Down has been activated<br>
					    <p class="text-right" style="font-size:10pt;color:orange;" href="#">See instructions</p></a></li>
					    <li role="separator" class="divider"></li>
					    <li class="text-center"><a href="#">See all notifications<span class="left-gap glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> </a></li>
				</ul>
				</div>
				
				<div class="top-padding-narrow btn-group">
	                <li  class="no-padding " data-toggle="dropdown" data-target="#notification">
	                    <a class="no-padding " href="#"><img class="notif" src="<?php echo base_url('assets/images/user.png')?>"></a>
	                </li>
	                <ul class="dropdown-menu" >
					    <li class="text-center"><a href="#">Account</a></li>
					    <li class="text-center"><a href="#">My Work</a></li>
					    <li role="separator" class="divider"></li>
					    <li class="text-center"><a href="<?php echo base_url('login/logout')?>">Logout</a></li>
					</ul>
				</div>
			</ul>
		</div>
		<?php }else {?>

		<?php }?>

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