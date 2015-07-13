<?php
	$impactLabel = array(
			"<4-h","<1-d","<2-d","<3-d","<7-d",">7-d"
		);
	$criticalLabel=array(
			"hourly","daily","weekly","monthly","yearly","other"
		);
	$isInternalLabel=array(
		"eksternal","internal"
	);
	
?>

				<div class="row">
	  			         <div class="col-lg-6 text-left">
	  			         <h3 class="title title-header">	
						 <a class="back-button-gap" href="<?php echo base_url('bu') ?>">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						</a>View Business Unit</h3>
						</div>
						<div class="top-gap col-lg-6 text-right">
						<a class="edit-button-gap crud" href="<?php echo base_url('bu/edit/')."/".$bu->id;?>">Edit
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						</div>
				</div> 

<div class="row top-space" >
	<div  class="content-wrapper">

		<div class="row">
	         <div class="col-lg-6 text-left">
	         <h3 class="title title-header">	
			 <a class="back-button-gap" href="<?php echo base_url('bu') ?>">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			</a><?php echo $ba->name?></h3>
			</div>
			<div class="top-gap col-lg-6 text-right">
			<a class="edit-button-gap crud" href="<?php echo base_url('bia/edit/')."/".$bia->id;?>">Edit
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</a>
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
										<label class="label-bold">Description</label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											<?php echo $ba->description?>
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Financial Impact </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
										<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter." ".unserialize(type_label_bu)[$bu->impact_parameter_type]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->less_4h]->type?></label>
											</div>
															
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_2." ".unserialize(type_label_bu)[$bu->impact_parameter_type_2]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->less_1d]->type?></label>
											</div>
																
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_3." ".unserialize(type_label_bu)[$bu->impact_parameter_type_3]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->less_2d]->type?></label>
											</div>
																
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_4." ".unserialize(type_label_bu)[$bu->impact_parameter_type_4]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->less_7d]->type?></label>
											</div>
														
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_5." ".unserialize(type_label_bu)[$bu->impact_parameter_type_5]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->less_7d]->type?></label>
											</div>
													
											
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Non Financial Impact </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter." ".unserialize(type_label_bu)[$bu->impact_parameter_type]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->non_less_4h]->type?></label>
											</div>
															
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_2." ".unserialize(type_label_bu)[$bu->impact_parameter_type_2]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->non_less_1d]->type?></label>
											</div>
																
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_3." ".unserialize(type_label_bu)[$bu->impact_parameter_type_3]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->non_less_2d]->type?></label>
											</div>
																
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_4." ".unserialize(type_label_bu)[$bu->impact_parameter_type_4]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->non_less_7d]->type?></label>
											</div>
													
											<div class="gap col-md-2 ">
												<label class="gap-narrow"> 
													<?php echo $bu->impact_parameter_5." ".unserialize(type_label_bu)[$bu->impact_parameter_type_5]?>
												</label>
												<label class=""><?php echo $ba_impact[$ba->non_more_7d]->type?></label>
											</div>
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Critical Time Period </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											<?php echo $criticalLabel[$ba->critical_time_per]?>
										</div>
									</td>
								</tr>
								<tr >
									<td class="td-label">
										<label class="label-bold">RTO </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											<?php echo $ba->rto?>
										</div>
									</td>
								</tr>
							</table>
						 </div>
					</div>
				</div>
			</div>

			<div class="row text-center" >
					<ul class="tab-switch nav nav-tabs text-center">
						
						<li class="tab-gap tab active">
							<a data-toggle="tab" href="#alt">Alt Methods</a>
						</li>
						<li class="tab-gap tab">
							<a data-toggle="tab" href="#dep">Dependencies</a>
						</li>
						<li class="tab-gap tab">
							<a  data-toggle="tab" href="#norm">MOR Resource </a>
						</li>
						<li class="tab-gap tab">
							<a  data-toggle="tab" href="#it">MOR IT</a>
						</li>
						<li class="tab-gap tab">
							<a  data-toggle="tab" href="#nonit">MOR Non-IT </a>
						</li>
						<li class="tab-gap tab">
							<a  data-toggle="tab" href="#rec">MOR Others</a>
						</li>
					</ul>	
				</div>

		</div>
	</div>
		
		
		<div class="detail">
			
				

				<div class=" tab tab-content">
					<div id="alt" class="tab-pane fade in active">
						<div class="col-lg-12">
							<div class="panel panel-default">										
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-6">
											<table  class="bia-detail">
												<tr >
													<td class="td-label">
														<label class="label-bold">Alternative Methods</label>
													</td>
													<td>
														<?php foreach ($alternative_method as $temp):?>
														<div class="gap col-md-12  ">
															<?php echo $temp->alternative_method?>
														</div>
														<?php endforeach;?>
														
													</td>
												</tr>
											</table>
											
										</div>
										 
									</div>
								</div>
							</div>
						</div>
					
						</div>
							<div id="dep" class="tab-pane fade">
								<?php for ($i = 0; $i<2;$i++) :?>
								<div class="col-lg-12">
									<div class="panel panel-default">	
										<div class="panel-heading">
											<?php echo $i==0?"Upstream":"Downstream"?>
										</div>									
										<div class="panel-body">
									<?php foreach ($dependencies->where('type_stream',$i)->where('ba_id',$ba->id)->get() as $key) :?>
											<div class="row">
												<div class="col-lg-6">
													<table>
														<tr class="tr-gap">
															<table  class="bia-detail">
																<tr >
																	<td class="td-label">
																		<label class="label-bold">Internal/External</label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																				<?php echo ($key->is_internal == 1 ? "internal" : "eksternal");?>
																		</div>
																	</td>
																</tr>
																
																<tr >
																	<td class="td-label">
																		<label class="label-bold">Name of Party</label>
																	</td>
																			
																	<td>
																		<div class="gap col-md-12  ">
																			<?php echo $key->party_name?>
																		</div>
																	</td>
																</tr>
																		
																<tr >
																	<td class="td-label">
																		<label class="label-bold">RTO</label>
																	</td>
																	
																	<td>
																		<div class="gap col-md-12  ">
																			<?php echo $key->rto." ".$key->rto_type?>
																		</div>
																	</td>
																</tr>
																		
																<tr class="tr-gap">
																	<td class="td-label">
																		<label class="label-bold">BCM Arrangement in Place</label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																			<?php echo ($key->arrangement_in_place == 1 ? "yes" : "no");?>
																		</div>
																	</td>
																</tr>
															</table>
														</tr>

													</table>
												</div>
											</div>
									<?php endforeach;?>
										</div>
									</div>
								</div>
								<?php endfor;?>
							</div>
							
								
							<div id="norm" class="tab-pane fade">
								<div class="col-lg-12">
									<div class="panel panel-default">	
										<div class="panel-heading">
											Normal
										</div>										
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-6">
													<table  class="bia-detail">
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Location</label>
															</td>
															<td>
																<div class="gap col-md-12  ">
																	<?php echo $mor_normal->location?>
																</div>
															</td>
														</tr>
																
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Staff</label>
															</td>
															<td>
																<label class="num ">
																	<?php echo $mor_normal->staff?>
																</label>
															</td>
														</tr>

														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Shift</label>
															</td>
															<td>
																<label class="num ">
																	<?php echo $mor_normal->shift?>
																</label>
															</td>
														</tr>
														
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Workstations</label>
															</td>
															<td>
																<label class="num ">
																	<?php echo $mor_normal->work_station?>
																</label>
															</td>
														</tr>
																
														<tr>
															<td class="td-label">
																<label class="label-bold">PC/Notebook</label>
															</td>
															<td>
																<label class="num ">
																	<?php echo $mor_normal->pc?>
																</label>
															</td>
														</tr>
														
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Work Facility</label>
															</td>
																
															<td>
																<?php foreach ($mor_normal_work_facility as $key):?>
																<div class="gap col-md-12  ">
																	<?php echo $key->work_facility?>
																</div>
																<?php endforeach;?>
															</td>
														</tr>
																
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Skill Set/Designation</label>
															</td>
															<td>
																<?php foreach ($mor_normal_skill_set as $key):?>
																<div class="gap col-md-12  ">
																	<?php echo $key->skill_set?>
																</div>
																<?php endforeach?>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												Minimum Operating Requirements ( MOR )
											</div>								
										<div class="panel-body">
											
											<div class="row">
												<div class="col-lg-6">
													<table  class="bia-detail">
														
															
														<tr class="tr-gap">
															<td class="td-label">
																<label class="label-bold">Staff</label>
															</td>
															<td>
																<div class="gap col-md-12  ">
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> < 4-hour  </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_less_4h?>
																		</label>
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow">< 1-day </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_less_1d?>
																		</label>
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow">< 2-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_less_2d?>
																		</label>
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> < 3-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_less_3d?>
																		</label>
																	</div>
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> < 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_less_7d?>
																		</label>
																	</div>
																				
																	<div class="gap col-md-2 ">
																		<label class="gap-narrow"> > 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->s_more_7d?>
																		</label>
																	</div>
																</div>
															</td>
														</tr>
																	
														<tr>
															<td class="td-label">
																<label class="label-bold">Work Area Recovery</label>
															</td>
															<td>
																<div class="gap col-md-12  ">
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 4-hour  </label>
																	<label class="num ">
																			<?php echo $mor_normal->war_less_4h?>
																		</label>
																</div>
																				
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 1-day </label>
																	<label class="num ">
																			<?php echo $mor_normal->war_less_1d?>
																		</label>
																</div>
																					
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 2-day  </label>
																	<label class="num ">
																			<?php echo $mor_normal->war_less_2d?>
																		</label>
																</div>
																					
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 3-day  </label>
																	<label class="num ">
																			<?php echo $mor_normal->war_less_3d?>
																		</label>
																</div>
																			
																<div class="gap col-md-2 ">
																	<label class="gap-narrow">< 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->war_less_7d?>
																		</label>
																</div>
																		
																<div class="gap col-md-2 ">
																	<label class="gap-narrow">> 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->war_more_7d?>
																		</label>
																</div>
																				
																</div>
															</td>
														</tr>
														<tr>
															<td class="td-label">
																<label class="label-bold">PC/Notebook</label>
															</td>
															<td>
																<div class="gap col-md-12  ">
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 4-hour  </label>
																	<label class="num ">
																			<?php echo $mor_normal->p_less_4h?>
																		</label>
																</div>
																				
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 1-day </label>
																	<label class="num ">
																			<?php echo $mor_normal->p_less_1d?>
																		</label>
																</div>
																					
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 2-day  </label>
																	<label class="num ">
																			<?php echo $mor_normal->p_less_2d?>
																		</label>
																</div>
																					
																<div class="gap col-md-2 ">
																	<label class="gap-narrow"> < 3-day  </label>
																	<label class="num ">
																			<?php echo $mor_normal->p_less_3d?>
																		</label>
																</div>
																			
																<div class="gap col-md-2 ">
																	<label class="gap-narrow">< 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->p_less_7d?>
																		</label>
																</div>
																		
																<div class="gap col-md-2 ">
																	<label class="gap-narrow">> 7-day  </label>
																		<label class="num ">
																			<?php echo $mor_normal->p_more_7d?>
																		</label>
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
							</div>
							
							<div id="it" class="tab-pane fade">
								<div class="col-lg-12">
									<div class="panel panel-default">	
										<div class="panel-heading">
											Software Requirements
										</div>										
										<div class="panel-body">
											
											<div class="row">
												<div class="col-lg-6">
													<table>
														<tr class="tr-gap">
															<table  class="bia-detail">
															<?php foreach ($mor_software_bas as $mor_software_ba) :?>

															<tr class="tr-gap" >
																<td class="td-label">
																	<label class="label-bold"></br><?php echo $mor_software->where('id',$mor_software_ba->mor_software_id)->get()->name?></label>
																</td>
															</tr>
																		
															<tr >
																<td class="td-label">
																	<label class="label-bold">RTO</label>
																</td>
																<td>
																	<label class="num "><?php echo $mor_software_ba->rto?></label>
																</td>
															</tr>
																		
															<tr >
																<td class="td-label">
																	<label class="label-bold">RPO</label>
																</td>
																<td>
																	<label class="num "><?php echo $mor_software_ba->rpo?></label>
																</td>
															</tr>
															<tr class="tr-gap">
																<td class="td-label">
																	<label class="label-bold">Alt Manual Methods</label>
																</td>
																<td>
																	<div class="gap col-md-12  ">
																		<?php echo $mor_software_ba->alternative_manual_method?>
																	</div>
																</td>
															</tr>
															<?php endforeach;?>	

															</table>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default">	
										<div class="panel-heading">
												Hardware Requirements
											</div>										
										<div class="panel-body">	
											<div class="row">
												<div class="col-lg-6">
													<table>
														<tr class="tr-gap">
															<table  class="bia-detail">
															<?php foreach ($mor_hardware_bas as $mor_hardware_ba) :?>

																<tr class="tr-gap">
																<td class="td-label">
																</br>
																	<label class="label-bold"><?php echo $mor_hardware->where('id',$mor_hardware_ba->mor_hardware_id)->get()->name?></label>
																</td>
																<td>
																</td>
															</tr>
																		
															<tr >
																<td class="td-label">
																	<label class="label-bold">RTO</label>
																</td>
																<td>
																	<label class="num "><?php echo $mor_hardware_ba->rto?></label>
																</td>
															</tr>
																		
															<tr >
																<td class="td-label">
																	<label class="label-bold">Quantitiy</label>
																</td>
																<td>
																	<label class="num "><?php echo $mor_hardware_ba->quantity?></label>
																</td>
															</tr>
															<tr class="tr-gap">
																<td class="td-label">
																	<label class="label-bold">Sharing</label>
																</td>
																<td>
																	<label class="num "><?php echo $mor_hardware_ba->is_sharing==1?"yes":"no"?></label>
																</td>
															</tr>
															<?php endforeach?>
															</table>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						
						
						<div id="nonit" class="tab-pane fade">
							<div class="col-lg-12">
								<div class="panel panel-default">										
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-6">
												<?php foreach ($mor_non_it_bas as $mor_non_it_ba ):?> 
												<table  class="bia-detail">
													<tr >
														<td class="td-label">
															<label class="label-bold">Equipment</label>
														</td>
														<td>
															<div class="gap col-md-12  ">
																<?php echo $mor_non_it->where('id',$mor_non_it_ba->mor_non_it_id)->get()->equipment?>
															</div>
														</td>
													</tr>
																
													<tr >
														<td class="td-label">
															<label class="label-bold">RTO</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_non_it_ba->rto?></label>
														</td>
													</tr>
																
													<tr >
														<td class="td-label">
															<label class="label-bold">Quantitiy </label>
														</td>
														<td>
															<label class="num "><?php echo $mor_non_it_ba->quantity?></label>
														</td>
													</tr>
													<tr class="tr-gap">
														<td class="td-label">
															<label class="label-bold">Sharing </label>
														</td>
														<td>
															<label class="num "><?php echo $mor_non_it_ba->is_sharing==1?"yes":"no"?></label>
														</td>
													</tr>
												</table>
												<?php endforeach?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
								
						<div id="rec" class="tab-pane fade">
							<div class="col-lg-12">
								<div class="panel panel-default">										
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-6">
												<?php foreach ($mor_record_bas as $mor_record_ba): ?>
												<table  class="bia-detail">
													<tr >
														<td class="td-label">
															<label class="label-bold">Equipment</label>
														</td>
														<td>
															<div class="gap col-md-12  ">
																<?php echo $mor_record->where('id',$mor_record_ba->mor_record_id)->get()->name?>
															</div>
														</td>
													</tr>
																
													<tr >
														<td class="td-label">
															<label class="label-bold">RTO</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_record_ba->rto?></label>
														</td>
													</tr>

													<tr >
														<td class="td-label">
															<label class="label-bold">RPO</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_record_ba->rpo?></label>
														</td>
													</tr>
																
													<tr >
														<td class="td-label">
															<label class="label-bold">media</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_record_ba->media?></label>
														</td>
													</tr>

													<tr >
														<td class="td-label">
															<label class="label-bold">Current storage location</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_record_ba->current_storage_location?></label>
														</td>
													</tr>

													<tr >
														<td class="td-label">
															<label class="label-bold">ownership</label>
														</td>
														<td>
															<label class="num "><?php echo $mor_record_ba->ownership?></label>
														</td>
													</tr>

												</table>
												<?php endforeach?>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
				</div>
		</div>



	
</div>

