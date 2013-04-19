<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
      <th>Id alpza beca:</th>
      <td><?php echo $AlpzaBeca->getIdAlpzaBeca() ?></td>
    </tr>
    <tr>
      <th>Alpza miembro id alpza miembro:</th>
      <td><?php echo $AlpzaBeca->getAlpzaMiembroIdAlpzaMiembro() ?></td>
    </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaBeca->getNombre() ?></td>
		</tr>
		<tr>
			<th>Extracto:</th>
			<td><?php echo $AlpzaBeca->getExtracto() ?></td>
		</tr>
		<tr>
			<th>Beca:</th>
			<td><?php echo html_entity_decode($AlpzaBeca->getBeca()) ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if ($AlpzaBeca->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
      <th>Fecha ingreso:</th>
      <td><?php echo $AlpzaBeca->getFechaIngreso() ?></td>
    </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaBeca->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Fecha publicación:</th>
			<td><?php echo $AlpzaBeca->getFechaPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('alpzaBeca/edit?id_alpza_beca='.$AlpzaBeca->getIdAlpzaBeca()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('alpzaBeca/index') ?>">Listar</a>
</div>
</div>
