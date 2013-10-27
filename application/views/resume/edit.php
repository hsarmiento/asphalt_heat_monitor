<?php 
// echo '<pre>';
// print_r($aAsphalt);
// echo '</pre>';
?>

<div id="general">
 	<?php echo validation_errors(); ?>
 	<?php echo form_open('resume/edit/'.$aAsphalt[0]['id']); ?>
 		<label for="driver_full_name">Nombre del conductor: </label> 
		<input type="input" name="driver_full_name" value="<?php echo $aAsphalt[0]['driver_full_name'];?>" />
		<br/>
		<label for="driving_hours">Horas de conducción: </label> 
		<input type="input" name="driving_hours" value="<?php echo $aAsphalt[0]['driving_hours'];?>" />
		<br/>
		<label for="trailer_identifier">Identificador del trailer: </label> 
		<input type="input" name="trailer_identifier" value="<?php echo $aAsphalt[0]['trailer_identifier'];?>" />
		<br/>
		<label for="heater_type">Tipo de calefactor: </label> 
		<input type="input" name="heater_type" value="<?php echo $aAsphalt[0]['heater_type'];?>" />
		<br/>
		<label for="number_injector">Número de boquillas: </label> 
		<input type="input" name="number_injector" value="<?php echo $aAsphalt[0]['number_injector'];?>" />
		<br/>
		<label for="upload_date">Fecha de carga: </label>
		<input type="input" name="upload_date" id="upload_date" value="<?php echo $aAsphalt[0]['upload_date'];?>" />
		<br/>
		<label for="upload_time">Hora de carga: </label>
		<input type="text" name="upload_time" id="upload_time" value="<?php echo $aAsphalt[0]['upload_time'];?>" />
		<br/>
		<label for="upload_temp">Temperatura de carga: </label>
		<input type="input" name="upload_temp" value="<?php echo $aAsphalt[0]['upload_temp'];?>" />
		<br/>
		<label for="download_date">Fecha de descarga: </label>
		<input type="input" name="download_date" id="download_date" value="<?php echo $aAsphalt[0]['download_date'];?>" />
		<br/>
		<label for="download_time">Hora de descarga: </label>
		<input type="text" name="download_time" id="download_time" value="<?php echo $aAsphalt[0]['download_time'];?>" />
		<br/>
		<label for="download_temp">Temperatura de descarga: </label>
		<input type="input" name="download_temp" value="<?php echo $aAsphalt[0]['download_temp'];?>" />
		<br/>
		<label for="travel_time">Tiempo de viaje: </label>
		<input type="text" name="travel_time" id="travel_time" value="<?php echo $aAsphalt[0]['travel_time'];?>" />
		<br/>
		<label for="heater_usage_hour">Tiempo de uso del calefactor: </label>
		<input type="input" name="heater_usage_hour" value="<?php echo $aAsphalt[0]['heater_usage_hour'];?>" />
		<br/>
		<label for="average_hourly_temp">Temperatura promedio por hora: </label>
		<input type="input" name="average_hourly_temp" value="<?php echo $aAsphalt[0]['average_hourly_temp'];?>" />
		<br/>
		<input type="submit" name="add_resume" value="Guardar" /> 
 	</form>

</div>

<script>
	$( "#upload_date" ).datepicker({ dateFormat: "yy-mm-dd" });
	$( "#download_date" ).datepicker({ dateFormat: "yy-mm-dd" });
	$( "#upload_time" ).timepicker();
	$( "#download_time" ).timepicker();
	$( "#travel_time" ).timepicker();
</script>