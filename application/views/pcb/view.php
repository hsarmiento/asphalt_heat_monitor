<?php
// echo '<pre>';
// print_r($pos);
// print_r($temp);
// echo '</pre>';
?>
<div id="general">
 	<div id="columnaa">
     <div id="tituloproyecto" class="titulos">Ubicación Acoplado / <span class="patentetitulo"><?php echo $temp[0]['pcb_name']; ?></span></div>
     <div id="map_canvas"></div>
    <div id="embed">
      <div id="map_canvas"></div>		  
    </div>
  </div>
  	
    
    
    
    <div id="columnaselectora">
     <div id="tituloproyecto"class="titulos">Acoplado</div>
     
     <div id="selectores">
     
     <div id="patentes1">
     
     <div class="patentes"><a href="<?php echo base_url();?>pcb/view/1"><?php echo $temp[0]['pcb_name']; ?></a></div>
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
     <div class="patentes"><a href="home_general.html">Eventos</a></div>
     
     </div></div>
    
    
    
    
    <div id="columnab">
     <div id="tituloproyecto"class="titulos">Centro Control</div>
     <div id="datoscolumnab">
     
       <div id="camion"></div>
       <div id="camion_temp"></div>
       <div class="titulos" id="calefacto_area">
        Calefactor Diesel <span id="status_heater"></span>
      </div>
       
       <div class="titulos" id="hrsdi">Hora de Inicio</div>
       <div class="titulos" id="tf">Tiempo de Funcionamiento</div>
       
       <div id="hrdi_valor">
         <div class="horadeinicio" id="hrdi_input">
           <?php 
              if($heater['status'] == 0 || empty($heater['status'])){
                echo '00:00:00';
              }else{
              echo $heater['created_at'];
              } ?>
         </div>
       </div>
       
       
       <div id="tf_valor">
         <div class="tiempodefuncionamiento" id="tf_input">
         00:00:00    
         </div>
       </div>
       <div class="resumen" id="dato_general">
       		N° Acoplado     : ZK - DF - 09<br>
			Conductor       : Felipe Nieto<br>
			Ubicación       : Lat. <span id="latitud"><?php echo $pos[0]['latitude'];?></span> / Log. <span id="longitud"><?php echo $pos[0]['longitude'];?></span> <br>
			<!-- Temperatura estanque: <span id="temp1"><?php //echo $temp[0]['heat']?></span> <br> -->
			<!-- Temperatura calefactor: <span id="temp2"><?php //echo $temp[1]['heat']?></span> <br> -->

			Hora de Inicio  : <span id="start_time">
      <?php 
          if($heater['status'] == 0 || empty($heater['status'])){
            echo '00:00:00';
          }else{
            echo $heater['created_at'];
          } 
         ?>
          </span>
          <br>
       		Tiempo de Func. : <span id="timer">00:00:00 Hrs.</span>
       	</div>
       <div id="box_bts"> 
         <div id="bts_grafico"> 
            <div class="botongrafico" id="botongrafico"><a href="<?php echo base_url();?>pcb/trending/<?php echo $pos[0]['pcb_id'];?>">Grafico</a></div>
            <div class="botonmapa" id="botonmapa"><a href="#">Ubicación</a></div> 
         </div>
         
         
         
         <div id="bts_alerta"><a href="#"><img src="<?php echo base_url();?>public/img/alerta.png" width="60" height="40" border="0" ></a></div>
       </div>
     </div>
     
  </div>
</div>

<script>
	var map;
	var bounds;
  var posicion;
	var last_position;
	var marker;
	function initialize() {
		bounds = new google.maps.LatLngBounds();
		last_position = new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>);
		var mapOptions = {
	    	zoom: 15,		    
		    center: last_position,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	  	};

		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		marker = new google.maps.Marker({
			map:map,
			draggable:true,
			animation: google.maps.Animation.DROP,
			position: new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>)
  		});
	}

	function loadScript() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize';
		document.body.appendChild(script);
	}

	window.onload = loadScript;

	setInterval(function(){
		$.ajax({
			url: "<?php echo base_url()?>position/ajax_view/1",
			dataType: 'json',
			cache: false
		}).done(function(data){      
			posicion = new google.maps.LatLng(data.pos.latitude,data.pos.longitude);      
			if (posicion.pb != last_position.pb || posicion.qb != last_position.qb) 
			{
				marker.setMap(null);
				bounds.extend(posicion);
				map.setCenter(posicion);
				marker = new google.maps.Marker({
					map:map,
					draggable:true,
					animation: google.maps.Animation.DROP,
					position: posicion,				
				});				
				last_position = posicion;
				$("#longitud").html(data.pos.longitude);
				$("#latitud").html(data.pos.latitude);
        // $("#temp1").html(data.temp1.heat);
        // $("#temp2").html(data.temp2.heat);
			}
		});
	},1000);

  $(function(){
    setInterval(function(){
      $.ajax({
        url: '<?=base_url()?>pcb/ajax_refresh_heater_status/<?=$heater["pcb_id"]?>',
        dataType: 'json',
        cache:false 
      }).done(function(data){
        if(data.status == '1'){
          $("#hrdi_input").html(data.created_at);
          $("#start_time").html(data.created_at);
          $("#status_heater").html('Estado: PRENDIDO');
          chrono();
        }
        
        if(data.status == '0'){
          $("#status_heater").html('Estado: APAGADO');
          chronoStop();
        }
      });
    },1000)
  });

  var startTime = 0;
  var start = 0;
  var end = 0;
  var diff = 0;
  var timerID = 0;

  function chrono(){
    start = <?php echo strtotime($heater['created_at'])*1000; ?>;
    end = new Date();
    end = end.getTime();
    diff = end - start;
    document.getElementById("tf_input").innerHTML = msToTime(diff);
    document.getElementById("timer").innerHTML = msToTime(diff);
    timerID = setTimeout("chrono()", 2);
  }
  function chronoStop(){
    clearTimeout(timerID)
  }

  function addZ(n) {
      return (n<10? '0':'') + n;
    }

  function msToTime(s) {
    var ms = s % 1000;
    s = (s - ms) / 1000;
    var secs = s % 60;
    s = (s - secs) / 60;
    var mins = s % 60;
    var hrs = (s - mins) / 60;
    return addZ(hrs) + ':' + addZ(mins) + ':' + addZ(secs);
  }
</script>