$(document).on("ready", function (){

	$('#patentes_bts_1').click(function(){
		$('#patentes1').delay(500).fadeToggle();
		$('#patentes2').fadeOut();
		
	});

	
	
	
	$('#patentes_bts_2').click(function(){
		$('#patentes2').delay(500).fadeToggle();
		$('#patentes1').fadeOut();
		
	
	});
	
	

	
	
	});
	
	
	
	
	$(document).on("ready", function (){

	$('#botongrafico').click(function(){
		$('#grafico').delay(500).fadeToggle();
		$('#mapa').fadeOut();
		
	});

	
	
	
	$('#botonmapa').click(function(){
		$('#mapa').delay(500).fadeToggle();
		$('#grafico').fadeOut();
		
	
	});
	
	

	
	
	});

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}