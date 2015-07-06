
<div  class="left-gap content-wrapper">
<div  class="row">
                <div class=" col-lg-12">
                    <h3 class="title page-header">Business Units</h3>
                </div>
                <!-- /.col-lg-12 -->
            
                <!-- /.col-lg-4 -->
             </div>
            <!-- /.row -->
			
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>List of Business Units</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="tr-gap">
                                            <th>BU Code</th>
                                            <th>Business Unit</th>
                                 
                                            <th class="th-gap text-right"><a href="<?php echo base_url('bu/create') ?>" class="button-gap crud">
											Add Business Unit <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                                        </tr>
                                    </thead>

								   	<tbody>
										<?php
                                        for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr class="tr-gap-upper">
									     <td>TCM</td>
									     <td><a href="<?php echo base_url('bu/view/').'/'.$bia[$i]->id;?>" > <?php echo 'Treasury and Capital Management';?></a></td>
                       <td  class="td-button text-right">
                       <a class="edit-button-gap crud" href="<?php echo base_url('bu/edit/').'/'.$bia[$i]->id;?>">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a class="delete-button-gap crud" href="#" data-target="#delete-bu" data-toggle="modal" >
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
         
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

                <div class="modal fade" id="delete-bu">
                  <div class="top-padding modal-dialog">
                    <div class="top-gap modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Delete Business Unit</h4>
                      </div>
                      <div class="text-center left-gap right-gap modal-body">
                        <h5>Are you sure want to delete 'Treasury and Capital Management' from Business Units? </h5>
                        
                      </div>
                      <div class="top-gap-narrow bottom-gap-narrow modal-footer text-center">
                        <a data-dismiss="modal" href="#" class="delete-button-gap">Cancel</a>
                        <a data-dismiss="modal" href="#" class="button-gap">Delete</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

</div>
		

                        <!-- /.panel-body -->
		
			
			