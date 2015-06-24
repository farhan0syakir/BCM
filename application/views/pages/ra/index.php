<div class="row">
    <div class=" col-lg-12">
        <h3 class="title page-header">Risk Assesment</h3>
    </div>
 </div>
<!-- /.row -->
			
<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>List of Risk Assesment</h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Risk Assesment</th>
                                <th></th>
                                <th><a class="crud" href="<?php echo base_url('ra/create')?>">Create New</a></th>
                            </tr>
                        </thead>

					   	<tbody>
							<?php for ($i = 0; $i < count($ra); $i++ )  : ?>
						   <tr>
						       <td><?php echo $i+1?></td>
						       <td><?php echo $ra[$i]->threat;?></td>
						       <td><a class="crud" href="<?php echo base_url('ra/view/').'/'.$ra[$i]->id;?>">View</a></td>
								<td><a class="crud" href="<?php echo base_url('ra/edit/').'/'.$ra[$i]->id;?>">Edit</a></td>
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