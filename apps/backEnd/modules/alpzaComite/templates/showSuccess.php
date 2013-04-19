<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
      <th>Id alpza comite:</th>
      <td><?php echo $AlpzaComite->getIdAlpzaComite() ?></td>
    </tr>
    <tr>
      <th>Id alpza miembro:</th>
      <td><?php echo $AlpzaComite->getIdAlpzaMiembro() ?></td>
    </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaComite->getNombre() ?></td>
		</tr>
		<tr>
			<th>Misión:</th>
			<td><?php echo html_entity_decode($AlpzaComite->getMision()) ?></td>
		</tr>
		<tr>
			<th>Visión:</th>
			<td><?php echo html_entity_decode($AlpzaComite->getVision()) ?></td>
		</tr>
		<tr>
			<th>Objetivos:</th>
			<td><?php echo html_entity_decode($AlpzaComite->getObjetivo()) ?></td>
		</tr>
		<tr>
			<th>Información:</th>
			<td><?php echo html_entity_decode($AlpzaComite->getInformacion()) ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $AlpzaComite->getEmail() ?></td>
		</tr>
		<tr>
			<th>Coordinador:</th>
			<td><?php echo $AlpzaComite->getCoordinador() ?></td>
		</tr>
		<tr>
			<th>Email del coordinador:</th>
			<td><?php echo $AlpzaComite->getEmailCoordinador() ?></td>
		</tr>
		<!--<tr>
      <th>Estado:</th>
      <td><?php echo $AlpzaComite->getEstado() ?></td>
    </tr>
    <tr>
      <th>Fecha ingreso:</th>
      <td><?php echo $AlpzaComite->getFechaIngreso() ?></td>
    </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaComite->getFechaEdicion() ?></td>
		</tr>
		<!--<tr>
      <th>Fecha publicacion:</th>
      <td><?php echo $AlpzaComite->getFechaPublicacion() ?></td>
    </tr>-->
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaComite/edit?id_alpza_comite='.$AlpzaComite->getIdAlpzaComite()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('alpzaComite/index') ?>">Listar</a>

</div>
</div>
