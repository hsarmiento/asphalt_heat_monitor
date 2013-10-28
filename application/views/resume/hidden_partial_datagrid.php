

<div id="contenedor">
  <div id="titulo_barra">Datos de Gestión Asfalto</div>
  <div id="datos_conductor"><table width="100%" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td colspan="2" bgcolor="#333333" class="datos_1"><br>
      <span class="titulo_3">Datos Conductor</span><br>
      <br></td>
    </tr>
  <tr>
    <td width="54%" height="39" bgcolor="#323232" class="datos_1"><span class="datos_22">Nombre del Conductor</span><br></td>
    <td width="46%" bgcolor="#000000" class="datos_1"><?=$aResume[0]['driver_full_name']?></td>
  </tr>
  <tr>
    <td height="46" bgcolor="#323232" class="datos_1"><span class="datos_22">Horas de conducción continua actual</span><br></td>
    <td bgcolor="#000000" class="datos_1"><?=$aResume[count($aResume)-1]['driving_hours']?></td>
  </tr>
  <tr>
    <td height="42" bgcolor="#323232" class="datos_1"><span class="datos_22">Identiﬁcación Acoplado</span><br></td>
    <td bgcolor="#000000" class="datos_1"><?=$aResume[0]['trailer_identifier']?></td>
  </tr>
</table>
</div>
  <div id="datos_calefactor">
  
  
  <table width="300px" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td colspan="2" bgcolor="#333333" class="datos_1"><br>
      <span class="titulo_3">Datos Equipo Calefactor</span><br>
      <br></td>
    </tr>
  <tr>
    <td width="60%" bgcolor="#323232" class="datos_1">Modelo</td>
    <td width="40%" bgcolor="#000000" class="datos_1">Beckett SF</td>
  </tr>
  <tr>
    <td bgcolor="#323232" class="datos_1"><?=$aResume[0]['heater_type']?></td>
    <td bgcolor="#000000" class="datos_1"><?=$aResume[0]['number_injector']?></td>
  </tr>
  </table>

  
  
  </div>
    
  
  
  <div id="titulo_barra_2">Datos Viajes Realizados con carga de Asfalto</div>
  
 
  
  <div id="central_datos">
  
  <table width="100%" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td width="12%" bgcolor="#333333"><div align="center">Fecha <br>
      de Carga</div></td>
    <td width="8%" bgcolor="#333333"><div align="center">Hora<br>
      de Carga</div></td>
    <td width="7%" bgcolor="#333333"><div align="center">Temp. <br>
      Carga (ºC)</div></td>
    <td width="9%" bgcolor="#333333"><div align="center">Temp. <br>
      Descarga (ªC)</div></td>
    <td width="11%" bgcolor="#333333"><div align="center">Fecha <br>
      Descarga</div></td>
    <td width="8%" bgcolor="#333333"><div align="center">Hora <br>
      Descarga</div></td>
    <td width="14%" bgcolor="#333333"><p align="center">Horas Transcurridas <br>
      Entre Carga y Descarga</p></td>
    <td width="10%" bgcolor="#333333"><p align="center">Horas de Uso <br>
      Calefactor</p></td>
    <td width="21%" bgcolor="#323232"><p align="center">Grados Cº promedio elevados <br>
      por hora de uso Calefactor Cº</p></td>
      <td width="14%" bgcolor="#333333"><p align="center"></td>
  </tr>
  <?php foreach ($aResume as $value) { ?>
      <tr>
        <td height="40" bgcolor="#000000" class="datos"><div align="center"><?=$value['upload_date']?></div></td>
        <td bgcolor="#000000" class="datos"><div align="center"><?=$value['upload_time']?></div></td>
        <td bgcolor="#000000" class="datos"><div align="center"><?=$value['upload_temp']?></div></td>
        <td bgcolor="#000000" class="datos"><div align="center"><?=$value['download_temp']?></div></td>
       <td bgcolor="#000000" class="datos"><div align="center"><?=$value['download_date']?></div></td>
         <td bgcolor="#000000" class="datos"><div align="center"><?=$value['download_time']?></div></td>
        <td bgcolor="#000000" class="datos"><div align="center"><?=$value['travel_time']?></div></td>
        <td bgcolor="#000000" class="datos"><div align="center"><?=$value['heater_usage_hour']?></div></td>
         <td bgcolor="#000000" class="datos"><div align="center"><?=$value['average_hourly_temp']?></div></td>
         <td bgcolor="#000000" class="datos"><div align="center"><a href="<?php echo base_url();?>resume/edit/<?php echo $value['id'];?>">Editar</a></div></td>  
      </tr>
  <?php } ?>
   
  </table>
   </div>

</div>