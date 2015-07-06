
 <div  class="left-gap content-wrapper">
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
                <h5>List of Business Activities</h5>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="tr-gap">
                                <th>BA Code</th>
                                <th>Business Activity</th>
                              
                                <th class="td-button th-gap text-right"><a href="<?php echo base_url('bia/create') ?>" class="button-gap crud">
								New <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                            </tr>
                        </thead>

					   	<tbody>
							<?php
                            for ($i = 0; $i < count($bia); $i++ )  : ?>
						   <tr class="tr-gap-upper">
						       <td> <?php echo "TCM-" . ($i+1) ?></td>
						       <td class="td-title"><a href="<?php echo base_url('bia/view/').'/'.$bia[$i]->id;?>"><?php echo $bia[$i]->name;?></a></td>
                               
						       <td  class="td-button text-right">
							  
                               <a class="edit-button-gap crud" href="<?php echo base_url('bia/edit/').'/'.$bia[$i]->id;?>">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#" >
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
</div>

<?php $this->load->view('pages/general/modalDelete');?>