<script>	
	function initialize() {
		var mapOptions = {
	    	zoom: 15,		    
		    center: new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>),
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	  	};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		var marker = new google.maps.Marker({
			map:map,
			draggable:true,
			animation: google.maps.Animation.DROP,
			position: new google.maps.LatLng(<?php echo $pos[0]['latitude']?>, <?php echo $pos[0]['longitude']?>)
  		});

  		var contentString = '<div>' +
  			"<b><?php echo $temp[0]['pcb_name']; ?></b>" + 
  			"<br>" +
  			"<b>Latitude:</b> <?php echo $pos[0]['latitude']; ?>" +
  			'<br>' +
  			"<b>Longitude:</b> <?php echo $pos[0]['longitude']; ?>" +
  			"<br>" +
  			"<b>Temperature sensor1:</b> <?php echo $temp[0]['heat'].'º'; ?>" + 
  			"<br>" +
  			"<b>Temperature sensor2:</b> <?php echo $temp[1]['heat'].'º'; ?>" + 
  			"<br>" +
  			"<b>Created at:</b> <?php echo $temp[1]['created_at']; ?></b> " +
  			"</div>"

		var infowindow = new google.maps.InfoWindow({
			content: contentString,							
		});

		infowindow.open(map,marker);
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