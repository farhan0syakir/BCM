</br>

</br>
<?php
//todo silahkan buat form disini
echo form_open('ra_controller/add');
echo form_label('threat')."</br>";
echo form_input('threat')."</br>";
echo form_label('P')."</br>";
echo form_input('P')."</br>";
echo form_label('I')."</br>";
echo form_input('I')."</br>";
echo form_label('Pm')."</br>";
echo form_input('Pm')."</br>";
echo form_label('Im')."</br>";
echo form_input('Im')."</br>";
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();