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

    	 <style type="text/css">
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0 }
			#map_canvas { height: 100% }
		</style>

	</head>

	<body>

		<?php echo $content_for_layout; ?>

	</body>
</html>