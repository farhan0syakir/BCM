
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
										<?php for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr>
									       <td><?php echo $i+1?></td>
									       <td><?php echo $bia[$i]['name'];?></td>
									       <td><a class="crud" href="<?php echo base_url('index.php/bia_controller/view/').'/'.$bia[$i]['id'];?>">View</a></td>
											<td><a class="crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]['id'];?>">Edit</a></td>
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