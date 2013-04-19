<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza evento:</th>
          <td><?php echo $AlpzaEvento->getIdAlpzaEvento() ?></td>
        </tr>
        <tr>
          <th>Alpza miembro id alpza miembro:</th>
          <td><?php echo $AlpzaEvento->getAlpzaMiembroIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaEvento->getNombre() ?></td>
		</tr>
		<tr>
			<th>Extracto:</th>
			<td><?php echo $AlpzaEvento->getExtracto() ?></td>
		</tr>
		<tr>
			<th>Evento:</th>
			<td><?php echo html_entity_decode($AlpzaEvento->getEvento()) ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php echo $AlpzaEvento->getEstado() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaEvento->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaEvento->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaEvento->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaEvento/edit?id_alpza_evento=' . $AlpzaEvento->getIdAlpzaEvento()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('alpzaEvento/index') ?>">Listar</a>

</div>
</div>
