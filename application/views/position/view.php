<script>
	// var posicion = new google.maps.LatLng(<?php echo $query['latitude']?>, <?php echo $query['longitude']?>);
	function initialize() {
		var mapOptions = {
	    	zoom: 15,
		    // center: new google.maps.LatLng(-33.408, -70.545),
		    center: new google.maps.LatLng(<?php echo $query['latitude']?>, <?php echo $query['longitude']?>),
		    // center: position,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	  	};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		var marker = new google.maps.Marker({
			map:map,
			draggable:true,
			animation: google.maps.Animation.DROP,
			position: new google.maps.LatLng(<?php echo $query['latitude']?>, <?php echo $query['longitude']?>)
  		});
	}

	function loadScript() {
	  var script = document.createElement('script');
	  script.type = 'text/javascript';
	  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	  document.body.appendChild(script);
	}

	window.onload = loadScript;
</script>

<div id="map_canvas"></div>