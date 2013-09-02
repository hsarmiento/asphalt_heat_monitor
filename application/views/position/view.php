<script>	
	function initialize() {
		var mapOptions = {
	    	zoom: 15,		    
		    center: new google.maps.LatLng(<?php echo $pos['latitude']?>, <?php echo $pos['longitude']?>),		    
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	  	};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		var marker = new google.maps.Marker({
			map:map,
			draggable:true,
			animation: google.maps.Animation.DROP,
			position: new google.maps.LatLng(<?php echo $pos['latitude']?>, <?php echo $pos['longitude']?>)
  		});

  		var contentString = '<div>' +
  			"<b><?php echo $temp[0]['pcb_name']; ?></b>" + 
  			'<br>' +
  			'<b>Latitude: </b>' +
  			'<br>' +
  			'<b>Longitude: </b>' +
  			'<br>' +
  			'<b>Temperature sensor1</b>' + 
  			'<br>' +
  			'<b>Temperature sensor2</b>' + 
  			'<br>' +
  			'<b>Created at:</b>' +
  			'</div>'

		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 250			
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
echo '<pre>';
print_r($temp);
echo '</pre>';

?>

<div id="map_canvas"></div>