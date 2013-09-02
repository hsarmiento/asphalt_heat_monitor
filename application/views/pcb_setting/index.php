<h1>Configuración de placas</h1>

<?php
$aAttributes = array('class' => '', 'id' =>'save-setting-pcb');
echo form_open('pcb_setting/index', $aAttributes);?>
	<p> <?php 
		echo form_error('max_loss_time'); 
		echo form_label('Maximo tiempo de pérdida de comunicación (segundos)','max-loss-time');
		echo form_input(array('name'=>'max_loss_time','id'=>'max-loss-time', 'type'=>'text'));
		?>
	</p>
	<p> <?php 
		echo form_submit('save-setting','Guardar');
		?>
	</p>
<?php echo form_close(); ?>
