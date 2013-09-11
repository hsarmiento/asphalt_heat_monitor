<script>
	var map;
	var bounds;
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
</script>

<?php

// echo '<pre>';
// print_r($pos[0]);
// echo '</pre>';
// echo '<pre>';
// print_r($temp);
// echo '</pre>';
?>
<div id="map_canvas"></div>

<script type="text/javascript">
	setInterval(function(){
		$.ajax({
			url: "<?php echo base_url()?>position/ajax_view/1",
			dataType: 'json',
			cache: false
		}).done(function(data){			
			var posicion = new google.maps.LatLng(data.latitude,data.longitude);
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
			}			
		});
	},1000);
	
</script>