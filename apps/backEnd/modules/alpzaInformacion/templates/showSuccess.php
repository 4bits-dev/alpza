<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza informacion:</th>
          <td><?php echo $AlpzaInformacion->getIdAlpzaInformacion() ?></td>
        </tr>
        <tr>
          <th>Alpza miembro id alpza miembro:</th>
          <td><?php echo $AlpzaInformacion->getAlpzaMiembroIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Misión:</th>
			<td><?php echo html_entity_decode($AlpzaInformacion->getMision()) ?></td>
		</tr>
		<tr>
			<th>Visión:</th>
			<td><?php echo html_entity_decode($AlpzaInformacion->getVision()) ?></td>
		</tr>
		<tr>
			<th>Aliado:</th>
			<td><?php echo html_entity_decode($AlpzaInformacion->getAliado()) ?></td>
		</tr>
		<tr>
			<th>Boletín:</th>
			<td><?php echo $AlpzaInformacion->getBoletin() ?></td>
		</tr>
		<tr>
			<th>Twitter:</th>
			<td><?php echo $AlpzaInformacion->getTwitter() ?></td>
		</tr>
		<tr>
			<th>Facebook:</th>
			<td><?php echo $AlpzaInformacion->getFacebook() ?></td>
		</tr>
		<!--<tr>
          <th>Rss:</th>
          <td><?php echo $AlpzaInformacion->getRss() ?></td>
        </tr>-->
		<tr>
			<th>Email:</th>
			<td><?php echo $AlpzaInformacion->getEmail() ?></td>
		</tr>
		<tr>
			<th>Descripción:</th>
			<td><?php echo html_entity_decode($AlpzaInformacion->getDescripcion()) ?></td>
		</tr>
		<tr>
			<th>Teléfono:</th>
			<td><?php echo $AlpzaInformacion->getTelefono() ?></td>
		</tr>
		<tr>
			<th>Dirección:</th>
			<td><?php echo $AlpzaInformacion->getDireccion() ?></td>
		</tr>
		<tr>
			<th>Fax:</th>
			<td><?php echo $AlpzaInformacion->getFax() ?></td>
		</tr>
		<!--<tr>
          <th>Estado:</th>
          <td><?php echo $AlpzaInformacion->getEstado() ?></td>
        </tr>
        <tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaInformacion->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaInformacion->getFechaEdicion() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha publicación:</th>
          <td><?php echo $AlpzaInformacion->getFechaPublicacion() ?></td>
        </tr>-->
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaInformacion/edit?id_alpza_informacion=' . $AlpzaInformacion->getIdAlpzaInformacion()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('alpzaInformacion/index') ?>">Listar</a></div>
</div>
