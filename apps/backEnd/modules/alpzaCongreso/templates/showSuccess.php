<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza congreso:</th>
          <td><?php echo $AlpzaCongreso->getIdAlpzaCongreso() ?></td>
        </tr>
        <tr>
          <th>Id alpza miembro:</th>
          <td><?php echo $AlpzaCongreso->getIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaCongreso->getNombre() ?></td>
		</tr>
		<tr>
			<th>Extracto:</th>
			<td><?php echo $AlpzaCongreso->getExtracto() ?></td>
		</tr>
		<tr>
			<th>Congreso:</th>
			<td><?php echo html_entity_decode($AlpzaCongreso->getCongreso()) ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if($AlpzaCongreso->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaCongreso->getFechaIngreso() ?></td>
        </tr>
        <tr>-->
		<th>Fecha edición:</th>
		<td><?php echo $AlpzaCongreso->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaCongreso->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaCongreso/edit?id_alpza_congreso=' . $AlpzaCongreso->getIdAlpzaCongreso()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('alpzaCongreso/index') ?>">Listar</a></div>
</div>
