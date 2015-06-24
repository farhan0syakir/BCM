<div class="row" >
	<div  class="content-wrapper">
		<h3 class="title title-header">Create New Risk Assesment</h3>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" action="<?php echo base_url('ra/add')?>" method="post" >
								<div class="form-group">
									<label class="label-bold">Business Activity</label>
										<input class="form-control" placeholder="Input the name of business activity here!">
								</div>
								<div class="form-group">
									<label class="label-bold">Threat</label>
									<input class="form-control" placeholder="Enter text">
								</div>
															
								<div id= "dynamicFormVulnerability" class="form-group">
									<label class="label-bold">Vulnerabilities</label>
									<input  class="form-control" placeholder="Enter text">
								</div>
												   
								<div class="top-gap row">
									<div class="col-lg-12 text-right" >
										<a class="button-gap" onClick="addInput('dynamicFormVulnerability','vulnerabilities')">Add
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</a>
									</div>
								</div>
																	
								<table class="table-gap">
									<tr class="tr-gap">
										<td class="td-label">
											<label class="label-bold">P</label>
										</td>
										<td>
											<div class="gap col-md-12  ">
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 1  </label>
													<input type="checkbox" value="">
												</div>
																								
												<div class="gap col-md-2 ">
													<label class="gap-narrow">2 </label>
													<input type="checkbox" value="">
												</div>
												
												<div class="gap col-md-2 ">
													<label class="gap-narrow">3 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 4 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 5  </label>
													<input type="checkbox" value="">
												</div>
											</div>
										</td>
									</tr>
																						
									<tr class="tr-gap">
										<td class="td-label">
											<label class="label-bold">I</label>
										</td>
										<td>
											<div class="gap col-md-12  ">
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 1  </label>
													<input type="checkbox" value="">
												</div>
																								
												<div class="gap col-md-2 ">
													<label class="gap-narrow">2 </label>
													<input type="checkbox" value="">
												</div>
												
												<div class="gap col-md-2 ">
													<label class="gap-narrow">3 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 4 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 5  </label>
													<input type="checkbox" value="">
												</div>
											</div>
										</td>
									</tr>
							</table>
																					
							<div id="dynamicFormExistingMeasure" class="form-group">
								<label class="label-bold">Exiting Measure</label>
								<input class="form-control" placeholder="Enter text">
							</div>
							<div class="top-gap row">
								<div class="col-lg-12 text-right" >
									<a class="button-gap" onClick="addInput('dynamicFormExistingMeasure','existingMeasures')">Add
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
									</a>
								</div>
							</div>

							<table class="table-gap">
									<tr class="tr-gap">
										<td class="td-label">
											<label class="label-bold">PM</label>
										</td>
										<td>
											<div class="gap col-md-12  ">
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 1  </label>
													<input type="checkbox" value="">
												</div>
																								
												<div class="gap col-md-2 ">
													<label class="gap-narrow">2 </label>
													<input type="checkbox" value="">
												</div>
												
												<div class="gap col-md-2 ">
													<label class="gap-narrow">3 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 4 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 5  </label>
													<input type="checkbox" value="">
												</div>
											</div>
										</td>
									</tr>
																						
									<tr class="tr-gap">
										<td class="td-label">
											<label class="label-bold">IM</label>
										</td>
										<td>
											<div class="gap col-md-12  ">
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 1  </label>
													<input type="checkbox" value="">
												</div>
																								
												<div class="gap col-md-2 ">
													<label class="gap-narrow">2 </label>
													<input type="checkbox" value="">
												</div>
												
												<div class="gap col-md-2 ">
													<label class="gap-narrow">3 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 4 </label>
													<input type="checkbox" value="">
												</div>
																										
												<div class="gap col-md-2 ">
													<label class="gap-narrow"> 5  </label>
													<input type="checkbox" value="">
												</div>
											</div>
										</td>
									</tr>
							</table>
							
							<div id="dynamicFormProposedMeasures" class="form-group">
								<label class="label-bold">Proposed Measure</label>
								<input class="form-control" placeholder="Enter text">
							</div>
							<div class="top-gap row">
								<div class="col-lg-12 text-right" >
									<a class="button-gap" onClick="addInput('dynamicFormProposedMeasures','proposedMeasures')">Add
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
									</a>
								</div>
							</div>
					</div>
				</div>
				
					<div class="col-lg-12 text-center" >
						<button class="button-gap" type="submit" >Submit
							<i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
						</button>
					</div>
				</form>
			</div>
</div>