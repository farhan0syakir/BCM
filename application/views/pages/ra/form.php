</br>

</br>
<?php
	//todo silahkan buat form disini
	echo form_open('ra/add');
	echo form_label('threat')."</br>";
	echo form_input(array('name'=>'threat','required'=>'true'))."</br>";
?>
<?php echo form_label('Probability')."</br>";?>
<select name="P" required>
	<option value="">Please select</option>
	<?php for ($i = 0; $i < count($raProbability); $i++ )  : ?>
		<option value=<?php echo $raProbability[$i]->level?>>
			<?php echo $raProbability[$i]->probability?>
		</option>
	<?php endfor; ?>
</select>
</br>
<?php echo form_label('Impact')."</br>";?>
<select name="I" required>
	<option value="">Please select</option>
	<?php for ($i = 0; $i < count($raImpact); $i++ )  : ?>
		<option value=<?php echo $raImpact[$i]->id?>>
			<?php echo $raImpact[$i]->impact?>
		</option>
	<?php endfor; ?>
</select>
</br>
<?php	echo form_label('Pm')."</br>"; ?>
<select name="Pm" required>
	<option value="">Please select</option>
	<?php for ($i = 0; $i < count($raProbability); $i++ )  : ?>
		<option value=<?php echo $raProbability[$i]->level?>>
			<?php echo $raProbability[$i]->probability?>
		</option>
	<?php endfor; ?>
</select>
</br>
<?php	echo form_label('Im')."</br>"; ?>

<select name="Im" required>
	<option value="">Please select</option>
	<?php for ($i = 0; $i < count($raImpact); $i++ )  : ?>
		<option value=<?php echo $raImpact[$i]->id?>>
			<?php echo $raImpact[$i]->impact?>
		</option>
	<?php endfor; ?>
</select>
</br>
<?php
$this->load->view('pages/ra/dynamicForm');
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();
