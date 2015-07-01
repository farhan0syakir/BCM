

            <div class="row top-space" >
				<div  class="content-wrapper">
				         <h3 class="title title-header">View Business Unit</h3>
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
				                                     		<th/>Role<th/>
				                                            <th class="th-gap text-right"><a href="<?php echo base_url('bu/create') ?>" class="button-gap crud">
															Assign New Role <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></th>
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
															<td  class=" text-right">Authorizer
				                                            </td>				      
															<td  class=" text-right"><a class="edit-button-gap crud" href="<?php echo base_url('bu/edit/');?>">
															Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
															<td  class="td-button text-right"><a class="delete-button-gap crud" href="<?php echo base_url('bu/delete/');?>">
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
				</div>

				<div class="modal fade">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				        <h4 class="modal-title">Modal title</h4>
				      </div>
				      <div class="modal-body">
				        <p>One fine body…</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
    

