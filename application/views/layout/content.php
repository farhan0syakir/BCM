
		<div id="page-content-wrapper">
            <div class="container-fluid">
                <!--div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn top-margin btn-default" id="menu-toggle"><</a>
                        
						<!--p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p-->
                        
                    <!--/div>
                </div-->
				
				<!-- List BIA -->
				
				<div class="row">
                <div class=" col-lg-12">
                    <h3 class="title page-header">Business Impact Analysis</h3>
                </div>
                <!-- /.col-lg-12 -->
            
                <!-- /.col-lg-4 -->
             </div>
            <!-- /.row -->
			
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>List of Business Activities</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Business Activity</th>
                                            <th></th>
                                            <th><a class="crud">Create New</a></th>
                                        </tr>
                                    </thead>
                                   
								   <tbody>
                                     <?php for ($i = 1; $i <= count($bia); $i++ )  : ?>
									   <tr>
									   
                                            <td><?php echo $bia['id'][$i];?></td>
                                            <td><?php echo $bia['name'][$i];?></td>
                                            <td><a class="crud" href="<?php echo base_url('index.php/bia_controller/view/id')?>">View</a></td>
                                            <td><a class="crud" href="<?php echo base_url('index.php/bia_controller/edit/id')?>">Edit</a></td>
                                        
										</tr>
										<?php endfor; ?>
                                    </tbody>
									
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
				
				<!-- List BIA -->
				
            </div>
        </div>
