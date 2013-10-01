<div id="contenedor">
	<?php foreach ($aAlarmsEvents as $alarm) { ?>
		 <li><?=$alarm['text']?>  <?=$alarm['created_at']?></li>
   <?php }  ?>
</div>
