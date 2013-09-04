<h1>Configuración de sensores</h1>

<?php
$aAttributes = array('class' => '', 'id' =>'save-setting-sensor');
echo $msg;
echo form_open('sensor_setting/index', $aAttributes);?>
	<p> <?php 
		echo form_error('max_temperature'); 
		echo form_label('Maximo valor de temperatura','max-temperature');
		echo form_input(array('name'=>'max_temperature','id'=>'max-temperature', 'type'=>'text'));
		?>
	</p>
	<p> <?php 
		echo form_submit('save-setting','Guardar');
		?>
	</p>
<?php echo form_close(); ?>
