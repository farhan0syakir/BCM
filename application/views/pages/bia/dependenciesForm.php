<div>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioInternalExternal<?php echo $stream?>[<?php echo $counter?>]" value="0">External
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioInternalExternal<?php echo $stream?>[<?php echo $counter?>]" value="1" >Internal
	</label>
</div>
<div class="form-group">
	<label class="label-bold">Name of Party</label>
	<input class="form-control" placeholder="Department, Provider" name="name<?php echo $stream?>[]">
</div>
<div class="form-group">
	<label class="label-bold">RTO</label>
</div>
<div class="form-group">
	<input type="number" class="" placeholder="RTO" name="rto<?php echo $stream?>[]">
	<select class="" placeholder="RTO" name="rtoType<?php echo $stream?>[]">
		<option value="">NA</option>
		<option value="hours">Hours</option>
		<option value="weeks">Weeks</option>
	</select>
</div>
<div class="border-gap-bottom form-group">
	<label class="label-bold">
		BCM Arrangement in Place?
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream?>[<?php echo $counter?>]" value="1">Yes
	</label>
	<label class="label-bold radio-inline">
		<input  type="radio" name="radioBCMArrangmentPlace<?php echo $stream?>[<?php echo $counter?>]" value="0">No
	</label>
</div>
