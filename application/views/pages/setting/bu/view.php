

            <div class="row top-space" >
				<div  class="content-wrapper">
					<div class="row">
	  			         <div class="col-lg-6 text-left">
	  			         <h3 class="title title-header">	
						 <a class="back-button-gap" href="<?php echo base_url('bu') ?>">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						</a>View Business Unit</h3>
						</div>
						<div class="top-gap col-lg-6 text-right">
						<a class="edit-button-gap crud" href="<?php echo base_url('bu/edit/1');?>">
						Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						</div>
					</div> 
							  <div class="col-lg-12">
									<div class="panel panel-default">										
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-6">
													<table  class="bia-detail">
														
														<tr class="tr-gap">
															<td class="td-label">
															<label class="label-bold">BU Code</label>
															</td>
															<td>
															<div class="gap col-md-12  ">
															TCM															
															</div>
															</td>
														</tr>
														<tr class="tr-gap">
															<td class="td-label">
															<label class="label-bold">Unit Name </label>
															</td>
															<td>
															<div class="gap col-md-12  ">

															Treasury and Capital Management 	
															</div>
															</td>
														</tr>
															<tr class="tr-gap">
															<td class="td-label">
															<label class="label-bold">MTPD</label>
															</td>
															<td>
															<div class="gap col-md-12  ">
															8 days
															</div>
															</td>
														</tr>
															<tr class="tr-gap">
															<td class="td-label">
															<label class="label-bold">Impact Scale Parameter </label>
															</td>
															<td>
															<div class="gap col-md-12  ">
																<div class="gap col-md-12  ">
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> < 4 hours  </label>
																		
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow">< 1 day </label>
																		
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow">< 4 days  </label>
																		
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> < 8 days  </label>
																		
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> > 8 days  </label>
																		
																	</div>
																				
																
																</div>
															</div>
															</td>
															</tr>
													
														
													</table>
														
											     </div>
											</div>
										</div>
										</div>
								</div>

								<div class="col-lg-12">
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                           <h5>List of Users</h5>
				                        </div>
				                        <!-- /.panel-heading -->
				                        <div class="panel-body">
				                            <div class="table-responsive">
				                                <table class="table table-striped">
				                                    <thead>
				                                        <tr class="tr-gap">
				                                            <th>Name</th>
				                                            <th>Username</th>
				                                     		<th>Role</th>

				                                           	<th class=" text-right">
				                                            <a data-toggle="modal" data-target="#assign" class="button-gap crud">
															Assign New Role 
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
				                                        </tr>
				                                    </thead>

												   	<tbody>
														<?php
				                                        for ($i = 0; $i < 3; $i++ )  : ?>
													   <tr class="tr-gap-upper">
													       <td>John Doe Hopkins</td>
													       <td class="td-username">
				                                           <?php echo 'john.doe';/*$bia[$i]->name;*/ ?>
				                                           </td>
															<td >Authorizer
				                                            </td>				      
															<td  class=" text-right"><a class="edit-button-gap crud" data-toggle="modal" data-target="#edit">
															<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
															<a class="delete-button-gap crud" data-toggle="modal" data-target="#delete">
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

				<div class="modal fade" id="assign">
				  <div class="top-padding modal-dialog">
				    <div class="top-gap modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				        <h4 class="modal-title text-center">Assign New Role</h4>
				      </div>
				      <div class="left-gap right-gap modal-body">
				        <div class="inline form-group">
							
							<label class="label-bold">Name</label>
							<input class="form-control" placeholder="Enter the name" autocomplete="on">
							<label class="top-padding-narrow right-gap label-bold">Role</label>
							<label class="top-padding-narrow label-bold radio-inline">
								<input  type="radio" name="optradio">User
							</label>
							<label class="top-padding-narrow label-bold radio-inline">
								<input  type="radio" name="optradio" >Authorizer
							</label>

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
				  <div class="top-padding modal-dialog">
				    <div class="top-gap modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				        <h4 class="modal-title text-center">Edit Role</h4>
				      </div>
				      <div class="left-gap right-gap modal-body">
				        <div class="inline form-group">
							
							<label class="label-bold">John Doe Hopkins</label>
							
							<label class="top-padding-narrow right-gap label-bold">Role</label>
							<label class="top-padding-narrow label-bold radio-inline">
								<input  type="radio" name="optradio">User
							</label>
							<label class="top-padding-narrow label-bold radio-inline">
								<input  type="radio" name="optradio" >Authorizer
							</label>

						</div>	

						
				      </div>
				      <div class="modal-footer text-right">
				        
				        <a data-dismiss="modal" class="button-gap">Save</a>
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

				