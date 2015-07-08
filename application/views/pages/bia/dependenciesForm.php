<di class="bottom-gap-narrow">
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioInternalExternal<?php echo $stream?>[<?php echo $counter?>]" value="0">External
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioInternalExternal<?php echo $stream?>[<?php echo $counter?>]" value="1" >Internal
	</label>
</div>
<div class="bottom-gap-narrow form-group">
	<label class="label-bold">Name of Party</label>
	<input class="form-control" placeholder="Department, Provider" name="name<?php echo $stream?>[]">
</div>
<div class="no-margin form-group">
	<label class="label-bold">RTO</label>
</div>
<div class="form-group">
	<input class ="input-short num" type="number" min="0" class="" placeholder="RTO" name="rto<?php echo $stream?>[]">
	<select class="num" placeholder="RTO" name="rtoType<?php echo $stream?>[]">
		<option value="">NA</option>
		<option value="hours">Hours</option>
		<option value="weeks">Weeks</option>
	</select>
</div>
<div class="bottom-border form-group">
	<label class="label-bold">
		BCM Arrangement in Place?
	</label>
	<label class="left-gap-narrow top-gap-so-narrow label-bold radio-inline">
		<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream?>[<?php echo $counter?>]" value="1">Yes
	</label>
	<label class="left-gap-narrow top-gap-so-narrow label-bold radio-inline">
		<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream?>[<?php echo $counter?>]" value="0">No
	</label>
</div>
