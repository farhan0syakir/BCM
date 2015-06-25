<div  class="content-wrapper">
		<h3 class="title title-header"><?php echo $title?></h3>
		<div class="col-lg-12">
			<div class="panel panel-default">										
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<table  class="bia-detail">
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Threat</label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											<?php echo $threat?>
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Vulnerabiliies </label>
									</td>
									<td>
										<?php for ($i = 0; $i < count($vulnerabilities); $i++ )  : ?>
										<div class="gap row-md-12  ">
											<?php echo $vulnerabilities[$i]->vulnerability?>
										</div>
										<?php endfor?>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">P </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											P ini heheheeeeeehehehehee
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">I </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											I ini heheheeeeeehehehehee
										</div>
									</td>
								</tr>
								
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Existing Measures</label>
									</td>
									<td>
										<?php for ($i = 0; $i < count($existingMeasures); $i++ )  : ?>
										<div class="gap row-md-12  ">
											<?php echo $existingMeasures[$i]->existing_measure?>
										</div>
										<?php endfor?>
									</td>
								</tr>
								
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">PM </label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											PM ini heheheeeeeehehehehee
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">IM</label>
									</td>
									<td>
										<div class="gap col-md-12  ">
											IM ini heheheeeeeehehehehee
										</div>
									</td>
								</tr>
								<tr class="tr-gap">
									<td class="td-label">
										<label class="label-bold">Proposed Measures</label>
									</td>
									<td>
										<?php for ($i = 0; $i < count($proposedMeasures); $i++ )  : ?>
										<div class="gap row-md-12  ">
											<?php echo $proposedMeasures[$i]->proposed_measure?>
										</div>
										<?php endfor?>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
						