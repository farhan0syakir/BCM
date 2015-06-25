<div class="row">
    <div class=" col-lg-12">
        <h3 class="title page-header">Risk Assessment</h3>
    </div>
 </div>
<!-- /.row -->
			
<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>List of Risk Assessment</h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Risk Assessment</th>
                                 <th class="td-button"></th>
                                 <th class="td-button"></th>
                                 <th class="td-button th-gap text-right"><a href="<?php echo base_url('ra/create') ?>" class="button-gap crud">
                                 New <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                            </tr>
                        </thead>

					   	<tbody>
							<?php for ($i = 0; $i < count($ra); $i++ )  : ?>
						   <tr>
						       <td><?php echo $i+1?></td>
						       <td><?php echo $ra[$i]->threat;?></td>

                               <td  class="td-button text-right"><a class="view-button-gap crud" href="<?php echo base_url('ra/view/').'/'.$ra[$i]->id;?>">
                               View <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a></td>
                               <td  class="td-button text-center"><a class="edit-button-gap crud" href="<?php echo base_url('ra/edit/').'/'.$ra[$i]->id;?>">
                               Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                               <td  class="td-button text-right"><a onClick="changeDeleteId(<?php echo $ra[$i]->id?>)" class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#">
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
<?php $this->load->view('pages/general/modalDelete');?>