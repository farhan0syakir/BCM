</br>
</br>
<div id="popUpInputFromDropdown">
	<select>
		<option onClick = "removeDiv('tes')">farhan</option>
		<option onClick = "removeDiv('tes')">syakir</option>
		<option onClick = "addInput('tes','tes',5,false)">other</option>
	</select>
	<div id="tes">
	</div>
</div>
<div id="disableAnotherDropdown">
	<select id="selectFirst1">
		<option onCLick = "enableMyRight('selectFirst',1,5)">farhan</option>
		<option onCLick = "enableMyRight('selectFirst',1,5)">syakir</option>
		<option onCLick = "disableMyRight('selectFirst',1,5)">disable right</option>
	</select>
	<select id="selectFirst2">
		<option onCLick = "enableMyRight('selectFirst',2,5)">farhan</option>
		<option onCLick = "enableMyRight('selectFirst',2,5)">syakir</option>
		<option onCLick = "disableMyRight('selectFirst',2,5)">disable right</option>
	</select>
	<select id="selectFirst3">
		<option onCLick = "enableMyRight('selectFirst',3,5)">farhan</option>
		<option onCLick = "enableMyRight('selectFirst',3,5)">syakir</option>
		<option onCLick = "disableMyRight('selectFirst',3,5)" >disable right</option>
	</select>
	<select id="selectFirst4">
		<option onCLick = "enableMyRight('selectFirst',4,5)">farhan</option>
		<option onCLick = "enableMyRight('selectFirst',4,5)">syakir</option>
		<option onCLick = "disableMyRight('selectFirst',4,5)">disable right</option>
	</select>
	<select id="selectFirst5">
		<option onCLick = "enableMyRight('selectFirst',5,5)">farhan</option>
		<option onCLick = "enableMyRight('selectFirst',5,5)">syakir</option>
		<option onCLick = "disableMyRight('selectFirst',5,5)">disable right</option>
	</select>
</div>