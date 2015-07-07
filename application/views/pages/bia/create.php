<?php
	$impactLabel = array(
			"<4-h","<1-d","<2-d","<3-d","<7-d",">7-d"
		);
?>

<div class="row top-space" >
	<div  class="content-wrapper">
		<h3 class="title title-header">	
		<a class="back-button-gap" href="<?php echo base_url('bia') ?>">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>Create New Business Activity</h3>
		<div class="detail text">
			<ul class="tab-switch nav nav-tabs text-center" id="tabUl">
				<li class="tab-gap tab active">
					<a class="learntab" data-toggle="tab" href="#desc">Description</a>
				</li>
				<li class="tab-gap tab">
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
					
			<div class=" tab tab-content">
				<div id="desc" class="tab-pane fade in active">
					<?php echo form_open('bia/make',array("id"=>"myDescForm"))?>

					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="label-bold">version</label>
											<select class="form-control"> 
												<option value="ver1">ver1</option>
												<option value="ver2">ver2</option>
												<option value="ver3">ver3</option>
												<option value="ver4">ver4</option>     
												<option value="ver5">ver5</option> 
												<option value="ver6">ver6</option> 
											</select>
										</div>
										<div class="form-group">
											<label class="label-bold">Business Unit</label>
											<select class="form-control"> 
												<option value="BA1">BU1</option>
												<option value="BA2">BU2</option>
												<option value="BA3">BU3</option>
												<option value="BA4">BU4</option>     
												<option value="BA5">BU5</option> 
												<option value="BA6">BU6</option> 
											</select>
										</div>
										<div class="form-group">
											<label class="label-bold">Business Activity Code</label>
											<input name="bussinessUnitCode" class="form-control" placeholder="Input the name of business activity here!">
										</div>
										<div class="form-group">
											<label class="label-bold">Business Activity</label>
											<input id="bussinessNameId" name="name" class="form-control" placeholder="Input the name of business activity here!">
										</div>
										<div class="form-group">
											<label class="label-bold">Description</label>
											<textarea name="description" class="form-control" rows="3"></textarea>
										</div>
										<table class="table-gap">
											<tr class="tr-gap">
												<td class="td-label">
													<label class="label-bold">Financial Impact</label>
													<div class="gap col-md-12  " id = "finansialImpactDivId">
															<?php $impactSelectLength = count($impactLabel)?>
															<?php for ($i = 1; $i <= $impactSelectLength; $i++ )  : ?>
														<div class="gap col-md-2 " >
															<label class="gap-narrow"> <?php echo $impactLabel[$i-1]?>  </label>
																<select class="form-control" name="finansialImpact[]" id = "finansialImpactSelect<?php echo $i?>"> 
																	<option value="">Please select</option>
																		<?php for ($j = 0; $j < count($baImpact); $j++ )  : ?>
																	<option onClick = "
																			<?php
																				if($j==count($baImpact)-1){
																					echo "disableMyRight('finansialImpactSelect',".$i.",$impactSelectLength)";
																				}else{
																						echo "enableMyRight('finansialImpactSelect',".$i.",$impactSelectLength)";
																				}
																			?>
																				" 
																				value="<?php echo $baImpact[$j]->id?>"><?php echo $baImpact[$j]->type?></option>
																			<?php endfor; ?> 
																</select>
															</div>
																	<?php endfor;?>
														
														</div>
													</td>
												</tr>
														
												<tr class="tr-gap">
													<td class="td-label">
														<label class="label-bold">Non-Financial Impact</label>
														<div class="gap col-md-12  " id  = "nonFinansialImpactDivId">
															<?php for ($i = 1; $i <= count($impactLabel); $i++ )  : ?>
															<div class="gap col-md-2 " >
																<label class="gap-narrow"> <?php echo $impactLabel[$i-1]?>  </label>
																<select class="form-control" name="nonFinansialImpact[]" id = "nonFinansialImpactSelect<?php echo $i?>"> 
																	<option value="">Please select</option>
																	<?php for ($j = 0; $j < count($baImpact); $j++ )  : ?>
																	<option onClick = "
																				<?php
																				if($j==count($baImpact)-1){
																					echo "disableMyRight('nonFinansialImpactSelect',".$i.",$impactSelectLength)";
																				}else{
																					echo "enableMyRight('nonFinansialImpactSelect',".$i.",$impactSelectLength)";
																				}
																				?>
																			" 
																			value="<?php echo $baImpact[$j]->id?>"><?php echo $baImpact[$j]->type?></option>
																		<?php endfor; ?> 
																</select>
															</div>
																<?php endfor;?>
														</div>
													</td>
												</tr>
											</table>
																						
											<div class="form-group">
												<label class="label-bold">Critical Time Period</label>
												<select class="form-control" name="cto"> 
													<option value="1" onClick="removeDiv('popUpFreeText')">hourly</option>
													<option value="2" onClick="removeDiv('popUpFreeText')">dayly</option>
													<option value="3" onClick="removeDiv('popUpFreeText')">weekly</option>
													<option value="4" onClick="removeDiv('popUpFreeText')">monthly</option>     
													<option value="5" onClick="removeDiv('popUpFreeText')">yearly</option> 
													<option value="6" onClick = "addInput('popUpFreeText','cto_notes',1,false)">others</option> 
												</select>
											</div>
											<div id="popUpFreeText">
											</div>
											<div class="form-group">
												<label class="label-bold">RTO</label>
												<input id = "rtoId" class="form-control" placeholder="Enter text" readOnly="true" name="rto">
											</div>
											
											<div class="top-gap row">
												<div class="col-lg-6 text-left" type="submit" onClick="previous('myDescForm')" >
												</div>
												<div class="col-lg-6 text-right" >
													<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myDescForm')" data-toggle="tab" href="#alt">Next
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													</a>
												</div>
											</div>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>
				
				<div id="alt" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myAlternativeForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Alternative Methods
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<div class="bottom-gap-narrow form-group" id="alternativeMethodsId">
														<label class="label-bold">Add Alternative Methods/Contingency Plans</label>
														<input class="form-control" name="alternativeMethods[]" placeholder="Input the contingency plan here!" required="true">
													</div>	
													<div class="row  bottom-gap-narrow">
														<div class="col-lg-12 text-right">
															<a class="button-gap" onClick="addInput('alternativeMethodsId', 'alternativeMethods',5,true)">Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
														</div>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-12" >
												<div class="col-lg-6 text-left" >
													<a class="edit-button-gap" data-toggle="tab" type="submit" onClick="previous('myAlternativeForm')"  href="#desc">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
															Previous</a>
												</div>
												<div class="col-lg-6 text-right" >
													<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myAlternativeForm')" data-toggle="tab" href="#dep">Next
														<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>

				<div id="dep" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myDependenciesForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Dependencies
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<div class="form-group text-center">
														<label class="label-bold ">
														<h4 class="title-header ">Upstream</h4>
														</label>
													</div>
															<!--insert dependencies Form-->
													<div class="bottom-gap-narrow" id="contentDependenciesFormUpstream">
														<?php $this->load->view('pages/bia/dependenciesForm',array('stream'=>'Upstream','counter'=>'0'));?>
													</div>
													<div class="row  bottom-gap-narrow">
														<div class="col-lg-12 text-right">
															<a class="button-gap" id ="addDependenciesFormBtn" onClick="getDependenciesForm('contentDependenciesFormUpstream','Upstream')">Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
															</a>
														</div>
													</div>
												</td>
											</tr>
												
												<tr class="tr-gap">
													<td>
														<div class="form-group text-center">
															<label class="label-bold ">
																<h4 class="title-header ">Downstream</h4>
															</label>
														</div>
														<div  id="contentDependenciesFormDownstream">
															<?php $this->load->view('pages/bia/dependenciesForm',array('stream'=>'Downstream','counter'=>'0'));?>
														</div>
														<div class="row  bottom-gap-narrow">
															<div class="col-lg-12 text-right">
																<a class="button-gap" onClick = "getDependenciesForm('contentDependenciesFormDownstream','Downstream')">Add
																<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
																</a>
															</div>
														</div>
													</td>
												</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" type="submit" onClick="previous('myDependenciesForm')" href="#alt">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myDependenciesForm')" data-toggle="tab" href="#norm">Next
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>

				<div id="norm" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myNormalForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Resource Staff
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<div class="form-group text-center">
														<label class="label-bold "><h4 class="title-header ">Normal</h4></label>
													</div>
													<div class="form-group">
														<label class="label-bold">Location</label>
														<input class="form-control" placeholder="" name="location">
													</div>
													<div class="form-group">
														<table>
															<tr>
																<td>
																	<label class="label-bold">Staff</label>
																	<input  name="staffs" type="number" min="0" class="num form-control a-forth" placeholder=""/>
																</td>
																<td>
																	<label class="label-bold">Shift</label>
																	<input  name="shifts" type="number" min="0" class="num form-control a-forth" placeholder=""/>
																</td>
															</tr>
														</table>
													</div>
													<div class="form-group">
														<label class="label-bold">Workstations (Cubicle)</label>
														<input name="cubicles" type="number" min="0" class="num  form-control" placeholder="">
													</div>
													<div class="form-group">
														<label class="label-bold">PC/Notebook</label>
														<input name="notebooks" type="number" min="0" class="num form-control" placeholder="">
													</div>
													<div class="form-group" id="workFacilitiesId">
														<label class="label-bold">Work Facility</label>
														<input name="facilities[]" class="form-control" placeholder="">
													</div>
													<div class="row ">
														<div class="col-lg-12 text-right">
															<a class="button-gap" onClick="addInput('workFacilitiesId','facilities',5,false)">
																Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
															</a>
														</div>
													</div>
													<div class="form-group" id="skillSetsId">
														<label class="label-bold">Skill Set/Designation</label>
														<input name="skillSets[]"class="form-control" placeholder="">
													</div>
													<div class="row bottom-gap-narrow ">
														<div class="col-lg-12 text-right">
															<a class="button-gap" onClick="addInput('skillSetsId','skillSets',5,false)"> 
																Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true">
															</span>
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr class="tr-gap">
												<td>
													<div class="form-group text-center">
														<label class="label-bold ">
															<h4 class="title-header ">Minimum Operating Requirements ( MOR )</h4>
														</label>
													</div>
													<div class="form-group">
														<table class="table-gap">
															<tr class="tr-gap">
																<td class="td-label">
																	<label class="label-bold">Staff</label></td>
																<td>
																	<div class="gap col-md-12  ">
																		<?php for($i=0;$i<count($impactLabel);$i++):?>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <?php echo $impactLabel[$i];?> </label>
																				<input name="morNormalStaffs[]" class="num" type="number" min="0" ></input>
																			</div>
																		<?php endfor;?>
																	</div>
																</td>
															</tr>
																						
																<tr class="tr-gap">
																	<td class="td-label">
																		<label class="label-bold">Work Area Recovery </label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																			<?php for($i=0;$i<count($impactLabel);$i++):?>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <?php echo $impactLabel[$i];?> </label>
																				<input name="morWorkAreaRecoveries[]" class="num" type="number" min="0" ></input>
																			</div>
																			<?php endfor;?>
																		</div>
																	</td>
																</tr>
															
																<tr >
																	<td class="td-label">
																		<label class="label-bold">PC/Notebook</label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																			<?php for($i=0;$i<count($impactLabel);$i++):?>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <?php echo $impactLabel[$i];?> </label>
																				<input name="morNotebook[]" class="num" type="number" min="0" ></input>
																			</div>
																			<?php endfor;?>	
																		</div>	
																	</td>
																</tr>
															</tr>
														</table>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#dep" type="submit" onClick="previous('myNormalForm')">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myNormalForm')" data-toggle="tab" href="#it">Next
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>

				<div id="it" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myItForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								MOR ( IT Requirements )
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<div class="form-group text-center">
														<label class="label-bold ">
														<h4 class="title-header ">System Application Software</h4>
														</label>
													</div>
													<table>
														<tr class="gap col-md-12">
															<td class="gap col-md-3">
																<label class="gap-narrow">Software</label></td>
															<td class="gap col-md-3">
																<label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-3">
																<label class="gap-narrow" >RPO</label></td>
															<td class="gap col-md-3">
																<label class="label-bold">Alternative Manual Methods</label>
															</td>
														</tr>
														<?php for($i=0;$i<count($mor_software);$i++):?>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-3">
																<input type="checkbox" id="checkBoxSoftware<?php echo $mor_software[$i]->id?>" name="software_name[]" value="<?php echo $mor_software[$i]->id?>" onClick="checkingTableWithoutRadio('Software','checkBoxSoftware<?php echo $mor_software[$i]->id?>')"><?php echo $mor_software[$i]->name?>
															</td>
															<td class="gap col-md-3"><input disabled="true" class="num" id="rtoSoftwareId<?php echo $mor_software[$i]->id?>" name="software_rto[]"></td>		
															<td class="gap col-md-3"><input disabled="true" class="num" id="rpoSoftwareId<?php echo $mor_software[$i]->id?>" name="software_rpo[]" ></td>
															<td class="gap col-md-3">
																<input class="form-control" disabled="true" placeholder="Department, Provider" id="alternativeSoftware<?php echo $mor_software[$i]->id?>" name="alternative_manual_method[]">
															</td>
														</tr>
														<?php endfor;?>
														
													</table>
												</td>
											</tr>

						

											<tr class="tr-gap">
												<td>
													<div class="form-group text-center">
														<label class="label-bold ">
														<h4 class="title-header ">Hardware ( Server ) and Pheripherals</h4>
														</label>
													
														<table>
															<tr class="gap col-md-12">
																<td class="gap col-md-3">
																<td class="gap col-md-4">
																	<label class="gap-narrow">Hardware</label>
																</td>
																<td class="gap col-md-3">
																<td class="gap col-md-4">
																	<label class="gap-narrow">RTO</label>
																</td>		
																<td class="gap col-md-3">
																	<label class="gap-narrow" >Quantity</label>
																</td>
																<td class="gap col-md-3">
																	<label class="label-bold">Sharing?</label>
																</td>
															</tr>
															<?php for($i=0;$i<count($mor_hardware);$i++):?>
															<tr class="gap col-md-12 ">
																<td class="gap col-md-3"><input id="checkBoxHardware<?php echo $mor_hardware[$i]->id?>"type="checkbox" value="<?php echo $mor_hardware[$i]->id?>" name="hardware_id[]" onClick="checkingTableWithRadio('Hardware','checkBoxHardware<?php echo $mor_hardware[$i]->id?>')"><?php echo $mor_hardware[$i]->name?></td>
																<td class="gap col-md-4"><input id="checkBoxHardware<?php echo $mor_hardware[$i]->id?>"type="checkbox" value="<?php echo $mor_hardware[$i]->id?>" name="hardware_id[]" onClick="checkingTableWithRadio('Hardware','checkBoxHardware<?php echo $mor_hardware[$i]->id?>')"><?php echo $mor_hardware[$i]->name?></td>
																<td class="gap col-md-3"><input  disabled="true" id="rtoHardwareId<?php echo $mor_hardware[$i]->id?>"class="num" name="hardware_rto[]"></td>		
																<td class="gap col-md-3"><input  disabled="true" id="quantityHardware<?php echo $mor_hardware[$i]->id?>" class="num" name="hardware_quantity[]" ></td>
																<td class="gap col-md-3 ">
																	<label class="label-bold radio-inline"><input class="radioHardware<?php echo $mor_hardware[$i]->id?>" disabled="true" type="radio" name="is_sharing[<?php echo $i?>]" value="1">Yes</label>
																	<label class="label-bold radio-inline"><input class="radioHardware<?php echo $mor_hardware[$i]->id?>" disabled="true" type="radio" name="is_sharing[<?php echo $i?>]" value="0">No</label>
																</td>		
															</tr>
															<?php endfor;?>
															
														</table>
													</div>
													<div class="form-group">
													</div>
												
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#norm" type="submit" onClick="previous('myItForm')">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myItForm')" data-toggle="tab" href="#nonit">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>

				<div id="nonit" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myNonItForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								MOR ( Non IT Requirements )
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<table>
														<tr class="gap col-md-12">
															<td class="gap col-md-4"><label class="gap-narrow">Equipment</label></td>
															<td class="gap col-md-4"><label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-4"><label class="gap-narrow" >Quantity</label></td>
															<td class="gap col-md-4"><label class="gap-narrow" >Sharing</label></td>
														</tr>
														<?php for ($i=0; $i<count($mor_non_it); $i++) :?>
															
														<tr class="gap col-md-12 ">
															<td class="gap col-md-4">
																<input name="mor_non_it_id[]" id="checkBoxNonIt<?php echo $mor_non_it[$i]->id?>" type="checkbox" value="<?php echo $mor_non_it[$i]->id?>" onClick="checkingTableWithRadio('NonIt','checkBoxNonIt<?php echo $mor_non_it[$i]->id?>')"> 
																	<?php echo $mor_non_it[$i]->equipment?> 
															</td>
															<td class="gap col-md-4"><input  disabled="true" id="rtoNonItId<?php echo $mor_non_it[$i]->id?>" class="num" name="non_it_rto[]"></td>		
															<td class="gap col-md-4"><input  disabled="true" id="quantityNonIt<?php echo $mor_non_it[$i]->id?>" class="num" name="non_it_quantity[]" ></td>
															<td class="gap col-md-4 ">
																<label class="label-bold radio-inline"><input class="radioNonIt<?php echo $mor_non_it[$i]->id?>" disabled="true" type="radio" name="is_sharing_non_it[<?php echo $i?>]" value="1">Yes</label>
																<label class="label-bold radio-inline"><input class="radioNonIt<?php echo $mor_non_it[$i]->id?>" disabled="true" type="radio" name="is_sharing_non_it[<?php echo $i?>]" value="0">No</label>
															</td>	
														</tr>
														<?php endfor ?>
														
													</table>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#it" type="submit" onClick="previous('myNonItForm')">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" type="submit" onClick="inputPartialForm('myNonItForm')" data-toggle="tab" href="#rec">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<?php echo form_close()?>
				</div>

				<div id="rec" class="tab-pane fade">
					<?php echo form_open('bia/make',array("id"=>"myRecordForm"))?>
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								MOR ( Records/Items/Clerical Requirements )
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<table  class="bia-detail">
											<tr class="tr-gap">
												<td>
													<table>
														<tr class="gap col-md-12">
															<td class="gap col-md-2"><label class="gap-narrow">Equipment</label></td>
															<td class="gap col-md-2"><label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-2"><label class="gap-narrow" >RPO</label></td>
															<td class="gap col-md-2"><label class="gap-narrow" >Media</label></td>
															<td class="gap col-md-2"><label class="gap-narrow" >Current storage location</label></td>
															<td class="gap col-md-2"><label class="gap-narrow" >Ownership</label></td>
														</tr>
														<?php for ($i=0; $i<count($mor_record); $i++) :?>
															
														<tr class="gap col-md-12 ">
															<td class="gap col-md-4">
																<input name="mor_record_id[]" id="checkBoxRecord<?php echo $mor_record[$i]->id?>" type="checkbox" value="<?php echo $mor_record[$i]->id?>" onClick="checkingTableWithoutRadio('Record','checkBoxRecord<?php echo $mor_record[$i]->id?>')"> 
																	<?php echo $mor_record[$i]->name?> 
															</td>
															<td class="gap col-md-2"><input  disabled="true" id="rtoRecordId<?php echo $mor_record[$i]->id?>" class="num" name="mor_record_rto[]"></td>		
															<td class="gap col-md-2"><input  disabled="true" id="rpoRecordId<?php echo $mor_record[$i]->id?>" class="num" name="mor_record_rpo[]" ></td>
															<td class="gap col-md-2"><input  disabled="true" id="mediaRecord<?php echo $mor_record[$i]->id?>" class="num" name="mor_record_media[]" ></td>
															<td class="gap col-md-2"><input  disabled="true" id="currentStorageLocationRecord<?php echo $mor_record[$i]->id?>" class="num" name="mor_record_current_storage_location[]" ></td>
															<td class="gap col-md-2"><input  disabled="true" id="ownershipRecord<?php echo $mor_record[$i]->id?>" class="num" name="mor_record_ownership[]" ></td>
														</tr>
														<?php endfor ?>
													</table>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#nonit" type="submit" onClick="previous('myRecordForm')">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="button-gap" type="submit" onClick="inputPartialForm('myRecordForm')" data-toggle="tab" href="<?php echo base_url('/bia')?>">Save
												<span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close()?>
				</div>
			</div>
		</div>
	</div>
</div>
