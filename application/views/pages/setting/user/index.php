
<div  class="left-gap content-wrapper">
<div  class="row">
                <div class=" col-lg-12">
                    <h3 class="title page-header">List of Users</h3>
                </div>
                <!-- /.col-lg-12 -->
            
                <!-- /.col-lg-4 -->
             </div>
            <!-- /.row -->
			
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>List of Users</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="tr-gap">
                                            <th>Name</th>
                                            <th>Username</th>
                                     		
                                            <th class="th-gap text-right"><a href="#" data-toggle="modal" data-target="#create" class="button-gap crud">
											Add User <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
                                        </tr>
                                    </thead>

								   	<tbody>
										<?php
                                        for ($i = 0; $i < count($bia); $i++ )  : ?>
									   <tr class="tr-gap-upper">
									       <td>John Doe Hopkins</td>
									       <td class="td-username"><?php echo 'john.doe';/*$bia[$i]->name;*/ ?></td>
							
											
                        <td  class="td-button text-right">
                
                               <a class="right-gap-narrow edit-button-gap crud" href="#" data-toggle="modal" data-target="#edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                               </a>
                                <a class="delete-button-gap crud" href="#" data-toggle="modal" data-target="#delete" >
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

            <div class="modal fade" id="create">
                  <div class="top-gap modal-dialog">
                    <div class="top-gap modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Add New User</h4>
                      </div>
                      <div class="left-gap right-gap modal-body">
                        <div class="inline form-group">
                            
                            <label class="label-bold">Name</label>
                            <input class="bottom-gap-narrow form-control" placeholder="Enter the name" autocomplete="on">

                            <label class="label-bold">Username</label>
                            <input class="bottom-gap-narrow form-control" placeholder="Enter username" autocomplete="on">

                            <label class="label-bold">Password</label>
                            <input type="password" class="bottom-gap-narrow form-control" placeholder="Enter password" autocomplete="on">

                        </div>  

                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="#" class="edit-button-gap ">Add User <span class="glyph-pad glyphicon glyphicon-user" aria-hidden="true"></span> </a>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer text-right">
                        
                        <a data-dismiss="modal" class="button-gap">Save</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
    

                <div class="modal fade" id="edit">
                  <div class="top-gap modal-dialog">
                    <div class="top-gap modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Edit User</h4>
                      </div>
                      <div class="left-gap right-gap modal-body">
                        <div class="inline form-group">
                            
                            <label class="label-bold">Name</label>
                            <input class="bottom-gap-narrow form-control" value="John Doe Hopkins" autocomplete="on">

                            <label class="label-bold">Username</label>
                            <input class="bottom-gap-narrow form-control" value="john.doe" autocomplete="on">

                            <label class="label-bold">Password</label>
                            <input type="password" class="bottom-gap-narrow form-control" value="colokIdungEnt3" autocomplete="on">

                        </div>  

                      </div>
                      <div class="modal-footer ">
                          <div class="top-gap-narrow bottom-gap-narrow col-lg-6 text-left"> 
                            <a data-dismiss="modal" href="#" class=" bottom-gap-narrow delete-button-gap">Cancel</a>
                          </div>
                          <div class="top-gap-narrow bottom-gap-narrow col-lg-6 text-right">
                            <a data-dismiss="modal" href="#" class="bottom-gap-narrow button-gap">Save</a>
                          </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="delete">
                  <div class="top-padding modal-dialog">
                    <div class="top-gap modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Delete User</h4>
                      </div>
                      <div class="text-center left-gap right-gap modal-body">
                        <h5>Are you sure want to delete 'John Doe Hopkins' from list of users? </h5>
                        
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
			
			
			