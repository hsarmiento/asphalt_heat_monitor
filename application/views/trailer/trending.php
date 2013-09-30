
<div id="general">
    <div id="columnaa">
     <div id="tituloproyecto" class="titulos">Ubicación Acoplado / <span class="patentetitulo"><?php echo $aTrailerData['identifier']; ?></span></div>     
    <div id="embed">
        <div id="container-sensor1"></div>
    </div></div>
    
    
    
    
    <div id="columnaselectora">
     <div id="tituloproyecto"class="titulos">Acoplado</div>
     
     <div id="selectores">
     
     <div id="patentes1">
     
     <div class="patentes"><a href="<?php echo base_url();?>trailer/view/<?=$aTrailerData['id']?>"><?php echo $aTrailerData['identifier']; ?></a></div>
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
              if($aHeater['status'] == 0 || empty($aHeater['status'])){
                echo '00:00:00';
              }else{
              echo $aHeater['created_at'];
              } ?>
         </div>
       </div>
       
       
       <div id="tf_valor">
         <div class="tiempodefuncionamiento" id="tf_input">
         00:00:00    
         </div>
       </div>
       <div class="resumen" id="dato_general">
            N° Acoplado     : <?=$aTrailerData["identifier"]?><br>
            Conductor       : Rodolfo Machuca<br>
            Ubicación       : Lat. <span id="latitud"><?php echo $aPos[0]['latitude'];?></span> / Log. <span id="longitud"><?php echo $aPos[0]['longitude'];?></span> <br>
            Temperatura estanque: <span id="temp1"><?php echo $aTemp[1]['heat']?></span> <br>
            <!-- Temperatura calefactor: <span id="temp2"><?php //echo $aTemp[0]['heat']?></span> <br> -->
            Hora de Inicio  : 
            <span id="start_time">
                <?php 
                  if($aHeater['status'] == 0 || empty($aHeater['status'])){
                    echo '00:00:00';
                  }else{
                    echo $aHeater['created_at'];
                  } 
                 ?>
            </span>
          <br>
            Tiempo de Func. : <span id="timer">00:00:00 Hrs.</span>
        </div>
       <div id="box_bts">
       
       
       
         <div id="bts_grafico">
         
         
        <div class="botongrafico" id="botongrafico"><a href="#">Grafico</a></div>
        <div class="botonmapa" id="botonmapa"><a href="<?php echo base_url();?>trailer/view/<?php echo $aTrailerData['id'];?>">Ubicación</a></div>
         
         
         </div>
         
         
         
         <div id="bts_alerta"><a href="#"><img src="<?php echo base_url();?>public/img/alerta.png" width="60" height="40" border="0" ></a></div>
       </div>
     </div>
     
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>public/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/modules/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/highcharts-more.js"></script>

<script type="text/javascript">
	$(function () {
        $('#container-sensor1').highcharts({
            title: {
                text: 'Temperatura para acoplado identificador: <?=$aTrailerData["identifier"]?>',
                x: -20 //center
            },
            subtitle: {
                text: 'últimas 24 horas',
                x: -20
            },
            exporting: {
                  enabled: false
            },
            credits:{
                enabled: false
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                    month: '%e. %b',
                    year: '%b'
                }
            },
            yAxis: {

                title: {
                    text: 'Temperatura °C'
                },
                min: 0,
                max: 200,
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                series: {
                    marker: {
                        enabled: true,
                        symbol: 'circle',
                        radius: 2
                    }
                }
            },
            series: [{
                name: 'Temp °C sensor1',
                data: [<?php echo join($aData1, ",");?>]          
            }
            ]
        });
    });
$(function(){
    setInterval(function(){
      $.ajax({
        url: '<?=base_url()?>trailer/ajax_refresh_heater_status/<?=$aHeater["pcb_id"]?>',
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
    start = <?php echo strtotime($aHeater['created_at'])*1000; ?>;
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