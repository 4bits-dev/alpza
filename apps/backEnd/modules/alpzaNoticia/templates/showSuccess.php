<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza noticia:</th>
          <td><?php echo $AlpzaNoticia->getIdAlpzaNoticia() ?></td>
        </tr>
        <tr>
          <th>Alpza miembro id alpza miembro:</th>
          <td><?php echo $AlpzaNoticia->getAlpzaMiembroIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaNoticia->getNombre() ?></td>
		</tr>
		<tr>
			<th>Extracto:</th>
			<td><?php echo $AlpzaNoticia->getExtracto() ?></td>
		</tr>
		<tr>
			<th>Noticia:</th>
			<td><?php echo html_entity_decode($AlpzaNoticia->getNoticia()) ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if($AlpzaNoticia->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaNoticia->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaNoticia->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaNoticia->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaNoticia/edit?id_alpza_noticia=' . $AlpzaNoticia->getIdAlpzaNoticia()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('alpzaNoticia/index') ?>">Listar</a>

</div>
</div>
