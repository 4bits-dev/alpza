<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza miembro:</th>
          <td><?php echo $AlpzaMiembro->getIdAlpzaMiembro() ?></td>
        </tr>
        <tr>
          <th>Id alpza miembro tipo:</th>
          <td><?php echo $AlpzaMiembro->getIdAlpzaMiembroTipo() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaMiembro->getNombre() ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if ($AlpzaMiembro->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaMiembro->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaMiembro->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaMiembro->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembro/edit?id_alpza_miembro=' . $AlpzaMiembro->getIdAlpzaMiembro()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('miembro/index') ?>">Listar</a>

</div>
</div>
