<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza junta:</th>
          <td><?php echo $AlpzaJunta->getIdAlpzaJunta() ?></td>
        </tr>
        <tr>
          <th>Id alpza miembro:</th>
          <td><?php echo $AlpzaJunta->getIdAlpzaMiembro() ?></td>
        </tr>
        <tr>
          <th>Nombre:</th>
          <td><?php echo $AlpzaJunta->getNombre() ?></td>
        </tr>-->
		<tr>
			<th>Presidente:</th>
			<td><?php echo $AlpzaJunta->getPresidente() ?></td>
		</tr>
		<tr>
			<th>Vicepresidente:</th>
			<td><?php echo $AlpzaJunta->getVicepresidente() ?></td>
		</tr>
		<tr>
			<th>Secretario:</th>
			<td><?php echo $AlpzaJunta->getSecretario() ?></td>
		</tr>
		<tr>
			<th>Tesorero:</th>
			<td><?php echo $AlpzaJunta->getTesorero() ?></td>
		</tr>
		<tr>
			<th>Fiscal:</th>
			<td><?php echo $AlpzaJunta->getFiscal() ?></td>
		</tr>
		<tr>
			<th>Director ejecutivo:</th>
			<td><?php echo $AlpzaJunta->getDirectorEjecutivo() ?></td>
		</tr>
		<!--<tr>
          <th>Estado:</th>
          <td><?php echo $AlpzaJunta->getEstado() ?></td>
        </tr>
        <tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaJunta->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaJunta->getFechaEdicion() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha publicacion:</th>
          <td><?php echo $AlpzaJunta->getFechaPublicacion() ?></td>
        </tr>-->
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaJunta/edit?id_alpza_junta=' . $AlpzaJunta->getIdAlpzaJunta()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('alpzaJunta/index') ?>">Listar</a>

</div>
</div>
