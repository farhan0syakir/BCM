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
                                 
                                            <th class="th-gap text-right">
                                              <a href="<?php echo base_url('bu/create') ?>" class="button-gap crud">Add Business Unit 
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                              </a>
                                            </th>
                                        </tr>
                                    </thead>

								   	<tbody>
										    <?php
                          for ($i = 0; $i < count($setting_bu); $i++ )  : ?>
    									   <tr class="tr-gap-upper">
    									     <td><?php echo $setting_bu[$i]->bu_code ?></td>
    									     <td><a href="<?php echo base_url('bu/view/').'/'.$setting_bu[$i]->id;?>" ><?php echo $setting_bu[$i]->name;?></a></td>
                          <td  class="td-button text-right">
                            <a class="edit-button-gap crud" href="<?php echo base_url('bu/edit/').'/'.$setting_bu[$i]->id;?>">
                              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            <a class="delete-button-gap crud" href="#" data-target="#modalDeleteId" data-toggle="modal" onClick="changeDeleteId(<?php echo $setting_bu[$i]->id?>,'<?php echo $setting_bu[$i]->name?>')">
                              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a>
                          </td>
             
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
<?php $this->load->view('pages/general/modalDelete');?>
