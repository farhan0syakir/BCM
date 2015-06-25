<div class="row top-space" >
	<div  class="content-wrapper">
		<h3 class="title title-header">Create New Risk Assesment</h3>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<?php echo form_open('ra/add');?>
								<div class="form-group">
									<label class="label-bold">Business Activity</label>
										<select class="form-control" required="true" name="bia"> 
										<option value="">Please select</option>
										<?php for ($i = 0; $i < count($ba); $i++ )  : ?>
											<option value="<?php echo $ba[$i]->id?>"><?php echo $ba[$i]->name?></option>
										<?php endfor; ?>
										</select>
								</div>
								<div class="form-group">
									<label class="label-bold">Threat</label>
									<input class="form-control" placeholder="Enter text" required="true" name="threat">
								</div>
															
								<div class="form-group" id="dynamicFormVulnerability">
									<label class="label-bold">Vulnerabilities</label>
									<input class="form-control" placeholder="Enter text" required="true" name="vulnerabilities[]">
								</div>
												   
								<div class="top-gap row" >
									<div class="col-lg-12 text-right" >
										<a class="button-gap" onClick="addInput('dynamicFormVulnerability','vulnerabilities',5,true)">Add
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</a>
									</div>
								</div>
										
								<div class="form-group">
									<label class="label-bold">Probability</label>
										<select class="form-control" required="true" name="P"> 
											<option value="">Please select</option>
											<?php for ($i = 0; $i < count($raProbability); $i++ )  : ?>
												<option value="<?php echo $raProbability[$i]->level?>"><?php echo $raProbability[$i]->probability?></option>
											<?php endfor; ?>
										</select>
								</div>
								
								<div class="form-group">
									<label class="label-bold">Impact</label>
										<select class="form-control" required="true" name="I"> 
											<option value="">Please select</option>
											<?php for ($i = 0; $i < count($raImpact); $i++ )  : ?>
												<option value="<?php echo $raImpact[$i]->id?>"><?php echo $raImpact[$i]->impact?></option>
											<?php endfor; ?>
										</select>
								</div>
																	
																					
							<div class="form-group" id = "dynamicFormExistingMeasure">
								<label class="label-bold">Exiting Measure</label>
								<input class="form-control" placeholder="Enter text" required="true" name="existingMeasures[]">
							</div>
							<div class="top-gap row">
								<div class="col-lg-12 text-right" >
									<a class="button-gap" onClick="addInput('dynamicFormExistingMeasure','existingMeasures',5,true)">Add
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
									</a>
								</div>
							</div>

							<div class="form-group">
									<label class="label-bold">Probability after implement measures</label>
										<select class="form-control" required="true" name="Pm"> 
											<option value="">Please select</option>
											<?php for ($i = 0; $i < count($raProbability); $i++ )  : ?>
												<option value="<?php echo $raProbability[$i]->level?>"><?php echo $raProbability[$i]->probability?></option>
											<?php endfor; ?> 
										</select>
								</div>
								
								<div class="form-group">
									<label class="label-bold">Impact after implemented measures</label>
										<select class="form-control" required="true" name="Im"> 
											<option value="">Please select</option>
											<?php for ($i = 0; $i < count($raImpact); $i++ )  : ?>
												<option value="<?php echo $raImpact[$i]->id?>"><?php echo $raImpact[$i]->impact?></option>
											<?php endfor; ?>
										</select>
								</div>
							
							<div class="form-group" id="dynamicFormProposedMeasures">
								<label class="label-bold">Proposed Measure</label>
								<input class="form-control" placeholder="Enter text" name="proposedMeasures[]">
							</div>
							<div class="top-gap row">
								<div class="col-lg-12 text-right" >
									<a class="button-gap" onClick="addInput('dynamicFormProposedMeasures','proposedMeasures',5,true)">Add
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
									</a>
								</div>
							</div
					</div>
				</div>
				
				<div class="col-lg-12 text-center" >
					<button type="submit" class="button-gap">Create
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
				</div>
			<?php echo form_close()?>
		</div>
</div>