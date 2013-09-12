<h1>Alarmas y eventos</h1>
<table>
	<thead>
		<tr>
			<th>Acontecimiento</th>
			<th>Fecha</th>
		</tr>
		<tbody>
			<?php foreach ($aAlarmsEvents as $alarmEvent) { ?>
				<tr>
					<td><?=$alarmEvent['text']?></td>
					<td><?=$alarmEvent['created_at']?></td>
				</tr>
			<?php } ?>
		</tbody>
	</thead>
</table>
