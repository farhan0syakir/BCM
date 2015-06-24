<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--ul class="nav navbar-nav navbar-left dropdown">
					<li class="dropdown-toggle dropdown" type="button" id="menu1" data-toggle="dropdown"><a class="page-scroll">Tentang</a> </li>
						<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						  <li role="presentation"><a role="menuitem" tabindex="-1" href="about.php#about">Tentang Kami</a></li>
						  <li role="presentation"><a role="menuitem" tabindex="-1" href="about.php#tim">Tim Kami</a></li>
						  <li role="presentation"><a role="menuitem" tabindex="-1" href="about.php#sponsor">Sponsor</a></li>
						</ul>
					</li>
				    
					
					
               
                </ul-->
				<ul class="nav navbar-nav navbar-right dropdown">
				   <!--li>
                        <a class="page-scroll" href="contact.php">ACCOUNT</a>
                    </li>
                    <li class="login" >
                        <a class="page-scroll" id='modal-launcher' data-toggle="modal" data-target="#login-modal" >LOGOUT</a>
                    </li-->
					<li class="login" >
                        <a class="page-scroll" id='modal-launcher' data-toggle="modal" data-target="#login"> LOGIN</a>
                    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="login" class="modal fade" role="dialog">
                  <div class="top-padding modal-dialog text-center">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title ">Login to your account</h4>
                      </div>
                      <div class="modal-body">
                        <p>'Are you sure to delete Liquidity Management MM' ?</p>
                      </div>
                      <div class="bottom-gap modal-body">
                        <div class="row"> 
                           
                            <div class="padding-right-narrow text-right col-lg-6 ">
                                <a class="button-gap crud" data-dismiss="modal" href="#">
                                <span class="glyphicon glyphicon-remove"  aria-hidden="true"></span> CANCEL</a>
                            </div>
                             <div class="padding-leftt-narrow text-left col-lg-6">
                                <a class="delete-button-gap crud" data-dismiss="modal" href="#">
                                DELETE <span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></a>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
          </div>
