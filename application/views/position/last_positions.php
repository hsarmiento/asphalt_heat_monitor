<script>	
	function initialize() {
		var bounds = new google.maps.LatLngBounds();
		var mapOptions = {
	    	zoom: 15,		    
		    center: new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>),
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	  	};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		// var marker = new google.maps.Marker({
		// 	map:map,
		// 	draggable:true,
		// 	animation: google.maps.Animation.DROP,
		// 	position: new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>)
  // 		});
  		
  		var markers = [
	        [<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>, "<div><b><?php echo $temp[0]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[0]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[0]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[0]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[1]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[1]['created_at']; ?></div>"],
	        [<?php echo $pos[1]['latitude']?>, <?php echo $pos[1]['longitude']?>, "<div><b><?php echo $temp[1]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[1]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[1]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[2]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[3]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[3]['created_at']; ?></div>"],
	        [<?php echo $pos[2]['latitude']?>, <?php echo $pos[2]['longitude']?>, "<div><b><?php echo $temp[2]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[2]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[2]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[4]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[5]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[5]['created_at']; ?></div>"],
	        [<?php echo $pos[3]['latitude']?>, <?php echo $pos[3]['longitude']?>, "<div><b><?php echo $temp[3]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[3]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[3]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[6]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[7]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[7]['created_at']; ?></div>"],
	        [<?php echo $pos[4]['latitude']?>, <?php echo $pos[4]['longitude']?>, "<div><b><?php echo $temp[4]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[4]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[4]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[8]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[9]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[9]['created_at']; ?></div>"],
	        [<?php echo $pos[5]['latitude']?>, <?php echo $pos[5]['longitude']?>, "<div><b><?php echo $temp[5]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[5]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[5]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[10]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[11]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[11]['created_at']; ?></div>"],
	        [<?php echo $pos[6]['latitude']?>, <?php echo $pos[6]['longitude']?>, "<div><b><?php echo $temp[6]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[6]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[6]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[12]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[13]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[13]['created_at']; ?></div>"],
	        [<?php echo $pos[7]['latitude']?>, <?php echo $pos[7]['longitude']?>, "<div><b><?php echo $temp[7]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[7]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[7]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[14]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[15]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[15]['created_at']; ?></div>"],
	        [<?php echo $pos[8]['latitude']?>, <?php echo $pos[8]['longitude']?>, "<div><b><?php echo $temp[8]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[8]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[8]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[16]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[17]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[17]['created_at']; ?></div>"],
	        [<?php echo $pos[9]['latitude']?>, <?php echo $pos[9]['longitude']?>, "<div><b><?php echo $temp[9]['pcb_name']; ?></b><br><b>Latitude:</b> <?php echo $pos[9]['latitude']; ?><br><b>Longitude:</b> <?php echo $pos[9]['longitude']; ?><br><b>Temperature sensor1:</b> <?php echo $temp[18]['heat'].'º'; ?><br><b>Temperature sensor2:</b> <?php echo $temp[19]['heat'].'º'; ?><br><b>Created at:</b> <?php echo $temp[19]['created_at']; ?></div>"]
    	];	

    	var infoWindow = new google.maps.InfoWindow(), marker, i;

  		for(i = 0; i < markers.length; i++)
  		{
  			var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
  			bounds.extend(position);
        	marker = new google.maps.Marker({
	            position: position,
	            map: map,
	            draggable:true,
				animation: google.maps.Animation.DROP,
        	});

        	map.fitBounds(bounds);

        	google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                infoWindow.setContent(markers[i][2]);
	                infoWindow.open(map, marker);
	            }
        	})(marker, i));
  		}
	}

	function loadScript() {
	  var script = document.createElement('script');
	  script.type = 'text/javascript';
	  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	  document.body.appendChild(script);
	}

	window.onload = loadScript;
</script>

<?php
// echo '<pre>';
// print_r($pos);
// echo '</pre>';
// echo '<pre>';
// print_r($temp);
// echo '</pre>';
?>

<div id="map_canvas"></div>