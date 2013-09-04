<h1>Trending de temperatura estanque</h1>


<div id="container-sensor1" style="margin-bottom:80px;"></div>
<div id="container-sensor2"></div>




<script type="text/javascript" src="<?php echo base_url()?>public/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/modules/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/highcharts-more.js"></script>

<script type="text/javascript">
	$(function () {
        $('#container-sensor1').highcharts({
            title: {
                text: 'Temperatura para sensor identificador: <?=$strIdentifier1?>',
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
                    text: 'Temperatura'
                },
                min: 0,
                max: 100,
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
                name: 'T°',
                data: [<?php echo join($aData1, ",");?>]
                
            }]
        });
    });

$(function () {
        $('#container-sensor2').highcharts({
            title: {
                text: 'Temperatura para sensor identificador: <?=$strIdentifier2?>',
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
        		min: 0,
                max: 100,
                title: {
                    text: 'Temperatura'
                },
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
                name: 'T°',
                data: [<?php echo join($aData2, ",");?>]
                
            }]
        });
    });
</script>