<div>
	<label class="label-bold radio-inline">
	<input  type="radio" name="radioInternalExternal<?php echo $stream.$counter?>[]">External
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioInternalExternal<?php echo $stream.$counter?>[]" >Internal
	</label>
</div>
<div class="form-group">
		<label class="label-bold">Dependency</label>
		<input class="form-control" placeholder="Department, Provider" name="depedenciesName<?php echo $stream?>[]">
	</div>	
<div class="form-group">
	<label class="label-bold">Name of Party</label>
	<input class="form-control" placeholder="Department, Provider" name="partyName<?php echo $stream?>[]">
</div>
<div class="form-group">
	<label class="label-bold">RTO</label>
	<input class="form-control" placeholder="RTO" name="rtoName<?php echo $stream?>[]">
</div>
<div class="form-group">
	<label class="label-bold">
		BCM Arrangement in Place?
	</label>
	<label class="label-bold radio-inline">
	<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream.$counter?>[]">Yes
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream.$counter?>[]" >No
	</label>
</div>
