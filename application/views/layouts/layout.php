<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	    <title><?php echo $this->layout->getTitle(); ?></title>
	    
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/style.css">
		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
	    <!-- <link href="<?php echo base_url()?>public/css/estilos.css" rel='stylesheet' type='text/css' media='all' /> -->
	    <!-- <script type="text/javascript" src="<?php echo base_url()?>public/js/funciones.js"></script> -->
	    
	    <!--*************auxiliares*****************-->

		<?php echo $this->layout->css; ?>

		<?php echo $this->layout->js; ?>

		<!--**********fin auxiliares*****************-->

		<script>
			function initialize() {
			  var mapOptions = {
			    zoom: 8,
			    center: new google.maps.LatLng(-34.397, 150.644),
			    mapTypeId: google.maps.MapTypeId.ROADMAP
			  };

			  var map = new google.maps.Map(document.getElementById("map_canvas"),
			      mapOptions);
			}

			function loadScript() {
			  var script = document.createElement('script');
			  script.type = 'text/javascript';
			  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
			      'callback=initialize';
			  document.body.appendChild(script);
			}

			window.onload = loadScript;
    	</script>

	</head>

	<body>

		<?php echo $content_for_layout; ?>

	</body>
</html>