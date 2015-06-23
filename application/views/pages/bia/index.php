
<div  class="row">
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
                                        <tr class="tr-gap">
                                            <th>#</th>
                                            <th>Business Activity</th>
                                            <th class="td-button"></th>
											  <th class="td-button"></th>
                                            <th class="td-button th-gap text-right"><a href="<?php echo base_url('index.php/bia_controller/create') ?>" class="button-gap crud">
											New <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                                        </tr>
                                    </thead>

								   	<tbody>
										<?php
                                        for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr class="tr-gap-upper">
									       <td><?php echo $i+1?></td>
									       <td class="td-title"><?php echo $bia[$i]->name;?></td>
	
									       <td  class="td-button text-right"><a class="view-button-gap crud" href="<?php echo base_url('index.php/bia_controller/view/').'/'.$bia[$i]->id;?>">
										   View <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a></td>
											<td  class="td-button text-center"><a class="edit-button-gap crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]->id;?>">
											Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
											<td  class="td-button text-right"><a class="delete-button-gap crud" href="<?php echo base_url('index.php/bia_controller/delete/').'/'.$bia[$i]->id;?>">
											Delete <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
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
		
		<!--div class="row">
                <div class=" col-lg-12">
                    <h3 class="title page-header">IT Requirements</h3>
                </div>
                <!-- /.col-lg-12 -->
            
                <!-- /.col-lg-4 -->
             <!--/div>
			
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>List of Software Requirements</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <!--div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="tr-gap">
                                            <th>#</th>
                                            <th>System Application Software</th>
                                            <th>RTO</th>
											<th>RPO</th>
											<th>Alt Manual Method </th>
                                             <th></th>
											  <th></th>
                                              <th class="th-gap"><a class="button-gap crud">Create New</a></th>
                                        </tr>
                                    </thead>

								   	<tbody>
										<?php for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr class="tr-gap">
									       <td><?php echo $i+1?></td>
									       <td><?php echo $bia[$i]->name;?></td>
										   <td>10 hours</td>
									       <td>15 minutes</td>
										   <td>Sambungin ke Idung Ente</td>
											 <td><a class="view-button-gap crud" href="<?php echo base_url('index.php/bia_controller/view/').'/'.$bia[$i]->id;?>">View</a></td>
											<td><a class="edit-button-gap crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]->id;?>">Edit</a></td>
											<td><a class="delete-button-gap crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]->id;?>">Delete</a></td>
										</tr>
										<?php endfor; ?>
									</tbody>
									
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        <!--/div>
                        <!-- /.panel-body -->
						
						
						
                    <!--/div>
                    <!-- /.panel -->
                <!--/div>
			</div>
			
							<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>List of Hardware Requirements</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <!--div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="tr-gap">
                                            <th>#</th>
                                            <th>System Application Software</th>
                                            <th>RTO</th>
											<th>RPO</th>
											<th>Alt Manual Method </th>
                                               <th></th>
											  <th></th>
                                              <th class="th-gap"><a class="button-gap crud">Create New</a></th>
                                        </tr>
                                    </thead>

								   	<tbody>
										<?php for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr class="tr-gap">
									       <td><?php echo $i+1?></td>
									       <td><?php echo $bia[$i]->name;?></td>
										   <td>10 hours</td>
									       <td>15 minutes</td>
										   <td>Sambungin ke Idung Ente</td>
										 <td><a class="view-button-gap crud" href="<?php echo base_url('index.php/bia_controller/view/').'/'.$bia[$i]->id;?>">View</a></td>
											<td><a class="edit-button-gap crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]->id;?>">Edit</a></td>
											<td><a class="delete-button-gap crud" href="<?php echo base_url('index.php/bia_controller/edit/').'/'.$bia[$i]->id;?>">Delete</a></td>
										</tr>
										<?php endfor; ?>
									</tbody>
									
                                </table>
                            </div-->
                            <!-- /.table-responsive -->
                        </div-->
                        <!-- /.panel-body -->
						
						
						
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
			
			