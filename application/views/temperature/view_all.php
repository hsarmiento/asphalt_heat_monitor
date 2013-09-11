
<div style="float: left; width: 500px; border:1px solid black;">
	<h2>Temperaturas</h2>
	<table>
		<thead>
			<tr>
				<th>id temperatura</th>
				<th>sensor_id</th>
				<th>valor</th>
				<th>Fecha</th>
			</tr>
			<tbody>
				<?php foreach ($aResultTemp as $result) { ?>
					<tr>
						<td><?=$result['id']?></td>
						<td><?=$result['sensor_id']?></td>
						<td><?=$result['value']?></td>
						<td><?=$result['created_at']?></td>
					</tr>
				<?php } ?>
			</tbody>
		</thead>
	</table>
</div>

<div style="float: right; width: 500px; border:1px solid black;">
	<h2>Posiciones</h2>
	<table>
		<thead>
			<tr>
				<th>id position</th>
				<th>pcb_id</th>
				<th>lat</th>
				<th>long</th>
				<th>Fecha</th>
			</tr>
			<tbody>
				<?php foreach ($aResultPos as $result) { ?>
					<tr>
						<td><?=$result['id']?></td>
						<td><?=$result['pcb_id']?></td>
						<td><?=$result['latitude']?></td>
						<td><?=$result['longitude']?></td>
						<td><?=$result['created_at']?></td>
					</tr>
				<?php } ?>
			</tbody>
		</thead>
	</table>
</div>