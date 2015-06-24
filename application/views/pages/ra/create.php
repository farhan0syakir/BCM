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
									<input class="form-control" placeholder="Enter text" name="threat">
								</div>
															
								<div id= "dynamicFormVulnerability" class="form-group">
									<label class="label-bold">Vulnerabilities</label>
									<input  class="form-control" placeholder="Enter text" name='vulnerabilities[]'>
								</div>
												   
								<div class="top-gap row">
									<div class="col-lg-12 text-right" >
										<a class="button-gap" onClick="addInput('dynamicFormVulnerability','vulnerabilities')">Add
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</a>
									</div>
								</div>
										
								<div class="form-group">
									<label class="label-bold">P</label>
									<div class="dropdown">
										<input class="form-control dropdown-toggle" type="input" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Enter text">
										<span class="caret"></span>
										</input>
											 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li><a href="#">unlikely</a></li>
												<li><a href="#">likely</a></li>
												<li><a href="#">less likely</a></li>
												<li><a href="#">most likely</a></li>
												<li><a href="#">most good</a></li>
											</ul>
									</div>
								</div>
								
								<div class="form-group">
									<label class="label-bold">I</label>
									<div class="dropdown">
										<input class="form-control dropdown-toggle" type="input" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Enter text">
										<span class="caret"></span>
										</input>
											 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li><a href="#">unlikely</a></li>
												<li><a href="#">likely</a></li>
												<li><a href="#">less likely</a></li>
												<li><a href="#">most likely</a></li>
												<li><a href="#">most good</a></li>
											</ul>
									</div>
								</div>
																	
																					
							<div id="dynamicFormExistingMeasure" class="form-group">
								<label class="label-bold">Exiting Measure</label>
								<input class="form-control" placeholder="Enter text" name="existingMeasures[]">
							</div>
							<div class="top-gap row">
								<div class="col-lg-12 text-right" >
									<a class="button-gap" onClick="addInput('dynamicFormExistingMeasure','existingMeasures')">Add
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
									</a>
								</div>
							</div>

							<div class="form-group">
									<label class="label-bold">PM</label>
									<div class="dropdown">
										<input class="form-control dropdown-toggle" type="input" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Enter text">
										<span class="caret"></span>
										</input>
											 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li><a href="#">unlikely</a></li>
												<li><a href="#">likely</a></li>
												<li><a href="#">less likely</a></li>
												<li><a href="#">most likely</a></li>
												<li><a href="#">most good</a></li>
											</ul>
									</div>
								</div>
								
								<div class="form-group">
									<label class="label-bold">IM</label>
									<div class="dropdown">
										<input class="form-control dropdown-toggle" type="input" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Enter text">
										<span class="caret"></span>
										</input>
											 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li><a href="#">unlikely</a></li>
												<li><a href="#">likely</a></li>
												<li><a href="#">less likely</a></li>
												<li><a href="#">most likely</a></li>
												<li><a href="#">most good</a></li>
											</ul>
									</div>
								</div>
							
							<div id="dynamicFormProposedMeasures" class="form-group">
								<label class="label-bold">Proposed Measure</label>
								<input class="form-control" placeholder="Enter text" name="proposedMeasures[]">
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