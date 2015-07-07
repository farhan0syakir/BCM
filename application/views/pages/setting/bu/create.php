
            <div class="row top-space" >
				<div  class="content-wrapper">
				        <h3 class="title title-header">	
						 <a class="back-button-gap" href="<?php echo base_url('bu') ?>">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						</a>Create New Business Unit</h3>
								     <!-- /.col-lg-6 -->
									<div class="col-lg-12">
										<div class="panel panel-default">
										
											<div class="panel-body">
												<div class="row">
													<div class="col-lg-12">
														<?php echo form_open("bu/make") ?>
														
																					
															<div class="form-group">
																<label class="label-bold">BU Code</label>
																<input name="bu_code" class="a-forth form-control" placeholder="Enter Business Unit code here"/>
															</div>
															<div class="form-group">
																<label class="label-bold">Unit Name</label>
																<input name="name" class="form-control" placeholder="Enter the name of Business Unit here">
															</div>
															<div class="form-group">
																	
																	<label class="label-bold">MTPD</label>
																	<div class="row text-left">
																	<div class="col-md-2">
																		<input name="mtpd" class=" form-control" placeholder="Enter MTPD">
																	</div>
																	<div class="col-md-2">
																		<select id="mtpd_type_id" name="mtpd_type" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>
																	</div>

															</div>
																<div class="form-group">
																	
																	<label class="label-bold">Impact Scale Parameter</label>
																	
																	<div class="bottom-gap-narrow row text-left">
																	<div class="col-md-2">
																		<input name="impact_parameter" class=" form-control" placeholder="Enter Parameter">
																	</div>
																	<div class="col-md-2">
																		<select name="impact_parameter_type" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>
																	<div class="col-md-2">
																		<input name="impact_parameter_2" class=" form-control" placeholder="Enter Parameter">
																	</div>
																	<div class="col-md-2">
																		<select name="impact_parameter_type_2" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>
																	<div class="col-md-2">
																		<input name="impact_parameter_3" class=" form-control" placeholder="Enter Parameter">
																	</div>
																	<div class="col-md-2">
																		<select name="impact_parameter_type_3" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>

																	</div>

																	<div class="row text-left">
																	<div class="col-md-2">
																		<input name="impact_parameter_4" class=" form-control" placeholder="Enter Parameter">
																	</div>
																	<div class="col-md-2">
																		<select name="impact_parameter_type_4" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>
																	<div class="col-md-2">
																		<input name="impact_parameter_5" class=" form-control" placeholder="Enter Parameter">
																	</div>
																	<div class="col-md-2">
																		<select name="impact_parameter_type_5" class="form-control">
																			<option value="0">hour(s)</option>
																			<option value="1">day(s)</option>
																			<option value="2">month(s)</option>
																		</select>
																	</div>
																	

																	</div>

															</div>
												   
															<div class="top-gap row">
																				<div class="col-lg-6 text-left" >
																					<a  class="delete-button-gap" href="<?php echo base_url('bu'); ?>">
																					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
																					Cancel
																					</a>
																				</div>
																				<div class="col-lg-6 text-right" >
																					<button class="button-gap" type= "submit" href="<?php echo base_url('bu/view/1'); ?>">Save
																					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
																					</button>
																				</div>
															</div>
														<?php echo form_close() ?>
													</div>

													<!-- /.col-lg-6 (nested) -->
												</div>
												<!-- /.row (nested) -->
											</div>
											<!-- /.panel-body -->
										</div>
										<!-- /.panel -->
									</div>
									<!-- /.col-lg-12 -->
				
						</div>				
			
					</div>
				</div>

