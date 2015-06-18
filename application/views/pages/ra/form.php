</br>

</br>
<?php
//todo silahkan buat form disini
echo form_open('ra_controller/add');
echo form_label('threat')."</br>";
echo form_input(array('id'=>'threat','required'=>'true'))."</br>";
echo form_label('P')."</br>";
echo form_input(array('id'=>'P','required'=>'true'))."</br>";
echo form_label('I')."</br>";
echo form_input(array('id'=>'I','required'=>'true'))."</br>";
echo form_label('Pm')."</br>";
echo form_input(array('id'=>'Pm','required'=>'true'))."</br>";
echo form_label('Im')."</br>";
echo form_input(array('id'=>'Im','required'=>'true'))."</br>";
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();