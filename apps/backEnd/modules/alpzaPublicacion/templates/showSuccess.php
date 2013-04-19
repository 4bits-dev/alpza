<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza publicacion:</th>
          <td><?php echo $AlpzaPublicacion->getIdAlpzaPublicacion() ?></td>
        </tr>
        <tr>
          <th>Alpza miembro id alpza miembro:</th>
          <td><?php echo $AlpzaPublicacion->getAlpzaMiembroIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Tipo de Publicación:</th>
			<td><?php echo $AlpzaPublicacion->getIdAlpzaPublicacionTipo() ?></td>
		</tr>
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaPublicacion->getNombre() ?></td>
		</tr>
		<tr>
			<th>Extracto:</th>
			<td><?php echo $AlpzaPublicacion->getExtracto() ?></td>
		</tr>
		<tr>
			<th>Publicación:</th>
			<td><?php echo html_entity_decode($AlpzaPublicacion->getProyecto()) ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if ($AlpzaPublicacion->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaPublicacion->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaPublicacion->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaPublicacion->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaPublicacion/edit?id_alpza_publicacion=' . $AlpzaPublicacion->getIdAlpzaPublicacion()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('alpzaPublicacion/index') ?>">Listar</a></div>
</div>
