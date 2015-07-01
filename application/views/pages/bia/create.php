<?php
	$impactLabel = array(
			"<4-h","1-d","<2-d","<3-d","<7-d",">7-d"
		);
?>

<div class="row top-space" >
	<div  class="content-wrapper">
		<h3 class="title title-header">	
		<a class="back-button-gap" href="<?php echo base_url('bia') ?>">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>Create New Business Activity</h3>
		<div class="detail text-">
			<ul class="tab-switch nav nav-tabs text-center">
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
											<input name="bussinessActivity" class="form-control" placeholder="Input the name of business activity here!">
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
												<select class="form-control"> 
													<option value="1" onClick="removeDiv('popUpFreeText')">hourly</option>
													<option value="2" onClick="removeDiv('popUpFreeText')">dayly</option>
													<option value="3" onClick="removeDiv('popUpFreeText')">weekly</option>
													<option value="4" onClick="removeDiv('popUpFreeText')">monthly</option>     
													<option value="5" onClick="removeDiv('popUpFreeText')">yearly</option> 
													<option value="5" onClick = "addInput('popUpFreeText','CTO',1,false)">others</option> 
												</select>
											</div>
											<div id="popUpFreeText">
											</div>
											<div class="form-group">
												<label class="label-bold">RTO</label>
												<input id = "rtoId" class="form-control" placeholder="Enter text" disabled>
											</div>
											
											<div class="top-gap row">
												<div class="col-lg-6 text-left" >
													<a  class="delete-button-gap">
													<span class="glyphicon glyphicon-remove" aria-hidden="true">
													</span>
														Reset
													</a>
												</div>
												<div class="col-lg-6 text-right" >
													<a class="button-gap" data-toggle="tab" href="#alt">Next
														<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
													</a>
												</div>
											</div>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="alt" class="tab-pane fade">
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
													<div class="form-group" id="alternativeMethodsId">
														<label class="label-bold">Add Alternative Methods/Contingency Plans</label>
														<input class="form-control" placeholder="Input the contingency plan here!">
													</div>	
													<div class="row  bottom-gap-narrow">
														<div class="col-lg-12 text-right">
															<a class="button-gap" onClick="addInput('alternativeMethodsId', 'alternativeMethodsId',5,true)">Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
														</div>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#desc">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
														Previous</a>
											</div>
											<div class="col-lg-12 text-right" >
												<a class="edit-button-gap" data-toggle="tab" href="#dep">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="dep" class="tab-pane fade">
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
															<!--insert depedencies Form-->
													<div id="contentDepedenciesFormUpstream">
														<div>
															<label class="label-bold radio-inline">
															<input  type="radio" name="optradio">External																</label>
															<label class="label-bold radio-inline">
															<input  type="radio" name="optradio" >Internal
															</label>
														</div>
													<div class="form-group">
														<label class="label-bold">Dependency</label>																		<input class="form-control" placeholder="Department, Provider">
													</div>	
													<div class="form-group">
														<label class="label-bold">Name of Party</label>
														<input class="form-control" placeholder="Department, Provider">
													</div>
													<div class="form-group">
														<label class="label-bold">RTO</label>
														<input class="form-control" placeholder="RTO">
													</div>
													<div class="form-group">
														<label class="label-bold">
															BCM Arrangement in Place?
														</label>
														<label class="label-bold radio-inline">
														<input  type="radio" name="optradio">Yes
														</label>
														<label class="label-bold radio-inline">
														<input  type="radio" name="optradio" >No
														</label>
													</div>
													<div class="row  bottom-gap-narrow">
														<div class="col-lg-12 text-right">
															<a class="button-gap" id ="addDepedenciesFormBtn" onClick="getDepedenciesForm('contentDepedenciesFormUpstream')">Add
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
														<div id="contentDepedenciesFormDownstream">
															<div>
																<label class="label-bold radio-inline">
																<input  type="radio" name="optradio">External
																</label>
																<label class="label-bold radio-inline">
																<input  type="radio" name="optradio" >Internal
																</label>
															</div>
															<div class="form-group">
																<label class="label-bold">Dependency</label>
																<input class="form-control" placeholder="Department, Provider">
															</div>	
															<div class="form-group">
																<label class="label-bold">Name of Party</label>
																<input class="form-control" placeholder="Department, Provider">
															</div>
															<div class="form-group">
																<label class="label-bold">RTO</label>
																<input class="form-control" placeholder="RTO">
															</div>
															<div class="form-group">
																<label class="label-bold">
																	BCM Arrangement in Place?
																</label>
																<label class="label-bold radio-inline">
																<input  type="radio" name="optradio">Yes
																</label>
																<label class="label-bold radio-inline">
																<input  type="radio" name="optradio" >No
																</label>
															</div>
														</div>
														<div class="row  bottom-gap-narrow">
															<div class="col-lg-12 text-right">
																<a class="button-gap" onClick = "getDepedenciesForm('contentDepedenciesFormDownstream')">Add
																<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
																</a>
															</div>
														</div>
													</td>
												</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#alt">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" data-toggle="tab" href="#norm">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="norm" class="tab-pane fade">
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
														<label class="label-bold">Location</label><input class="form-control" placeholder="">
													</div>
													<div class="form-group">
														<table>
															<tr>
																<td>
																	<label class="label-bold">Staff</label>
																	<input  type="number" class="num form-control a-forth" placeholder=""/>
																</td>
																<td>
																	<label class="label-bold">Shift</label>
																	<input  type="number" class="num form-control a-forth" placeholder=""/>
																</td>
															</tr>
														</table>
													</div>
													<div class="form-group">
														<label class="label-bold">Workstations (Cubicle)</label><input type="number" class="num  form-control" placeholder="">
													</div>
													<div class="form-group">
														<label class="label-bold">PC/Notebook</label><input type="number" class="num form-control" placeholder="">
													</div>
													<div class="form-group">
														<label class="label-bold">Work Facility</label><input class="form-control" placeholder="">
													</div>
													<div class="row ">
														<div class="col-lg-12 text-right">
															<a class="button-gap">
																Add
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
															</a>
														</div>
													</div>
													<div class="form-group">
														<label class="label-bold">Skill Set/Designation</label>
														<input class="form-control" placeholder="">
													</div>
													<div class="row bottom-gap-narrow ">
														<div class="col-lg-12 text-right">
															<a class="button-gap">
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
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"> <4-h  </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"><1-d </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"><2-d  </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"> <3-d  </label>
																			<input class="num" type="number" ></label>
																		</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <7-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> >7-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																		</div>
																	</td>
																</tr>
																						
																<tr class="tr-gap">
																	<td class="td-label">
																		<label class="label-bold">Work Area Recovery </label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"> <4-h  </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"><1-d </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"><2-d  </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"> <3-d  </label>
																			<input class="num" type="number" ></label>
																		</div>
																		<div class="gap col-md-2 ">
																			<label class="gap-narrow"> <7-d  </label>
																			<input class="num" type="number" ></label>
																		</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> >7-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																		</div>
																	</td>
																</tr>
															
																<tr >
																	<td class="td-label">
																		<label class="label-bold">PC/Notebook</label>
																	</td>
																	<td>
																		<div class="gap col-md-12  ">
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <4-h  </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"><1-d </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"><2-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <3-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> <7-d  </label>
																				<input class="num" type="number" ></label>
																			</div>
																			<div class="gap col-md-2 ">
																				<label class="gap-narrow"> >7-d  </label>
																				<input class="num" type="number" ></label>
																			</div>	
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
												<a class="edit-button-gap" data-toggle="tab" href="#dep">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" data-toggle="tab" href="#it">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												</a>
											</div>
										</div>
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
															<td class="gap col-md-6">
																<label class="gap-narrow">Software</label></td>
															<td class="gap col-md-6">
																<label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-6">
																<label class="gap-narrow" >RPO</label></td>
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6">
																<input type="checkbox" value=""> Database</td>
															<td class="gap col-md-6"><input class="num" ></td>		
															<td class="gap col-md-6"><input class="num"  ></td>
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6"><input type="checkbox" value=""> Email</td>
															<td class="gap col-md-6"><input class="num"  ></td>		
															<td class="gap col-md-6"><input class="num" ></td>
														</tr>
													</table>
													<div class="form-group">
														<label class="label-bold">Alternative Manual Methods</label>
														<input class="form-control" placeholder="Department, Provider">
													</div>
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
																<td class="gap col-md-6">
																	<label class="gap-narrow">Software</label>
																</td>
																<td class="gap col-md-6">
																	<label class="gap-narrow">RTO</label>
																</td>		
																<td class="gap col-md-6">
																	<label class="gap-narrow" >Quantity</label>
																</td>
															</tr>
															<tr class="gap col-md-12 ">
																<td class="gap col-md-6"><input type="checkbox" value=""> CPU</td>
																<td class="gap col-md-6"><input class="num" ></td>		
																<td class="gap col-md-6"><input class="num"  ></td>
															</tr>
															<tr class="gap col-md-12 ">
																<td class="gap col-md-6"><input type="checkbox" value=""> Monitor</td>
																<td class="gap col-md-6"><input class="num"  ></td>		
																<td class="gap col-md-6"><input class="num" ></td>
															</tr>
														</table>
													</div>
													<div class="form-group">
															<label class="label-bold">Sharing?</label>
															<label class="label-bold radio-inline"><input  type="radio" name="optradio">Yes</label>
															<label class="label-bold radio-inline"><input  type="radio" name="optradio" >No</label>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#norm">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" data-toggle="tab" href="#nonit">
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Next</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="nonit" class="tab-pane fade">
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
															<td class="gap col-md-6"><label class="gap-narrow">Equipment</label></td>
															<td class="gap col-md-6"><label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-6"><label class="gap-narrow" >Quantity</label></td>
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6"><input type="checkbox" value=""> ATK</td>
															<td class="gap col-md-6"><input class="num" ></td>		
															<td class="gap col-md-6"><input class="num"  ></td>
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6"><input type="checkbox" value=""> Paper</td>
															<td class="gap col-md-6"><input class="num"  ></td>		
															<td class="gap col-md-6"><input class="num" ></td>
														</tr>
													</table>
													<div class="form-group">
														<label class="label-bold">Sharing? </label>
														<label class="label-bold radio-inline"><input  type="radio" name="optradio">Yes</label>
														<label class="label-bold radio-inline"><input  type="radio" name="optradio" >No</label>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#it">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="edit-button-gap" data-toggle="tab" href="#rec">Next
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<div id="rec" class="tab-pane fade">
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
															<td class="gap col-md-6"><label class="gap-narrow">Equipment</label></td>
															<td class="gap col-md-6"><label class="gap-narrow">RTO</label></td>		
															<td class="gap col-md-6"><label class="gap-narrow" >Quantity</label></td>
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6"><input type="checkbox" value=""> Trade blotter from SUMMIT</td>
															<td class="gap col-md-6"><input class="num" ></td>		
														</tr>
														<tr class="gap col-md-12 ">
															<td class="gap col-md-6"><input type="checkbox" value=""> Treasury Policy & Procedure</td>
															<td class="gap col-md-6"><input class="num"  ></td>		
															<td class="gap col-md-6"><input class="num" ></td>
														</tr>
													</table>
													<div class="form-group">
														<label class="label-bold">Sharing? </label>
														<label class="label-bold radio-inline"><input  type="radio" name="optradio">Yes</label>
														<label class="label-bold radio-inline"><input  type="radio" name="optradio" >No</label>
													</div>
												</td>
											</tr>
										</table>
										<div class="top-gap row">
											<div class="col-lg-6 text-left" >
												<a class="edit-button-gap" data-toggle="tab" href="#nonit">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Previous</a>
											</div>
											<div class="col-lg-6 text-right" >
												<a class="button-gap" href="" type="submit">Save
												<span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		