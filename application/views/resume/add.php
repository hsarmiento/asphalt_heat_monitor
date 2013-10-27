
<div id="general">

 	<?php echo validation_errors(); ?>
 	<?php echo form_open('resume/add'); ?>
 		<label for="driver_full_name">Nombre del conductor: </label> 
		<input type="input" name="driver_full_name" />
		<br/>
		<label for="driving_hours">Horas de conducción: </label> 
		<input type="input" name="driving_hours" />
		<br/>
		<label for="trailer_identifier">Identificador del trailer: </label> 
		<input type="input" name="trailer_identifier" />
		<br/>
		<label for="heater_type">Tipo de calefactor: </label> 
		<input type="input" name="heater_type" />
		<br/>
		<label for="number_injector">Número de boquillas: </label> 
		<input type="input" name="number_injector" />
		<br/>
		<label for="upload_date">Fecha de carga: </label>
		<input type="input" name="upload_date" id="upload_date" />
		<br/>
		<label for="upload_time">Hora de carga: </label>
		<input type="text" name="upload_time" id="upload_time" />
		<br/>
		<label for="upload_temp">Temperatura de carga: </label>
		<input type="input" name="upload_temp" />
		<br/>
		<label for="download_date">Fecha de descarga: </label>
		<input type="input" name="download_date" id="download_date" />
		<br/>
		<label for="download_time">Hora de descarga: </label>
		<input type="text" name="download_time" id="download_time" />
		<br/>
		<label for="download_temp">Temperatura de descarga: </label>
		<input type="input" name="download_temp" />
		<br/>
		<label for="travel_time">Tiempo de viaje: </label>
		<input type="text" name="travel_time" id="travel_time" />
		<br/>
		<label for="heater_usage_hour">Tiempo de uso del calefactor: </label>
		<input type="input" name="heater_usage_hour" />
		<br/>
		<label for="average_hourly_temp">Temperatura promedio por hora: </label>
		<input type="input" name="average_hourly_temp" />
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