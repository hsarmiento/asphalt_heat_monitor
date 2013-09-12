

<div id="general">
  <div id="columnaa">
     <div id="tituloproyecto" class="titulos">Ubicación Acoplado / <span class="patentetitulo">ZKDF09</span></div>
     <div id="malla"></div>
     <div id="embed">
       <div id="mapa">
       <iframe width="555" height="383" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?hl=es&amp;ie=UTF8&amp;ll=-33.462666,-70.677452&amp;spn=0.049765,0.090895&amp;t=k&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?hl=es&amp;ie=UTF8&amp;ll=-33.462666,-70.677452&amp;spn=0.049765,0.090895&amp;t=k&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
       
       </div>
      
     </div></div>
    
    <div id="columnaselectora">
     <div id="tituloproyecto"class="titulos">Acoplado</div>
     
     <div id="selectores">
     
     <div id="patentes1">
     
     <div class="patentes"><a href="<?=base_url()?>pcb/view/1">ZK DF 09</a></div>
     <div class="patentes"><a href="#">BB AF 12</a></div>
     <div class="patentes"><a href="#">RT JE 07</a></div>
     <div class="patentes"><a href="#">RK TF 65</a></div>
     <div class="patentes"><a href="#">UK DA 48</a></div>
      <div class="patentes"><a href="#">ZP DO 30</a></div>
     <div class="patentes"><a href="#">WO DR 18</a></div>
     <div class="patentes"><a href="#">GH DA 19</a></div>
     <div class="patentes"><a href="#">XX TA 27</a></div>
     </div>
     
          <div id="patentes2">
     
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
      <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     <div class="patentes"><a href="#">Ingresar</a></div>
     </div>
     
     

     <div class="patentes_bts ">
       <div class="patentes_bts_1" id="patentes_bts_1"><a href="#">Prev</a></div>
       <div class="patentes_bts_2" id="patentes_bts_2"><a href="#">Next</a></div>
     </div>
     <div class="patentes">
     
       <div class="sensor"><a href="sensor_config.html">Sensor</a></div>
       <div class="placa"><a href="placa_config.html">Placa</a></div>
     </div>
     <div class="patentes"><a href="#">Boton x</a></div>
     
     </div></div>
    
    
    
    
    <div id="columnab">
     <div id="tituloproyecto"class="titulos">Alarmas y Eventos</div>
     <div id="datoscolumnab">
       <?php foreach ($aAlarmsEvents as $alarm) { ?>
         <div class="alerta_area1"><?=$alarm['text']?>  <?=$alarm['created_at']?></div>
       <?php }  ?>
     </div>
     
  </div>
</div>