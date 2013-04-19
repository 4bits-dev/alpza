<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Información Financiera</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro</th>-->
			<th>Cuenta</th>
			<th>Institución</th>
			<th>Dirección</th>
			<th>Email</th>
			<th>Duración</th>
			<!--<th>Fecha ingreso</th>-->
			<th>Fecha edición</th>
			<!--<th>Fecha publicacion</th>-->
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroFinanzass as $AlpzaMiembroFinanzas): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroInformacionFinanciera/show?id_alpza_miembro_finanzas=' . $AlpzaMiembroFinanzas->getIdAlpzaMiembroFinanzas()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaMiembroFinanzas->getIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaMiembroFinanzas->getCuenta() ?></td>
			<td><?php echo $AlpzaMiembroFinanzas->getInstitucion() ?></td>
			<td><?php echo $AlpzaMiembroFinanzas->getDireccion() ?></td>
			<td><?php echo $AlpzaMiembroFinanzas->getEmail() ?></td>
			<td><?php echo $AlpzaMiembroFinanzas->getDuracion() ?></td>
			<!--<td><?php echo $AlpzaMiembroFinanzas->getFechaIngreso() ?></td>-->
			<td><?php echo $AlpzaMiembroFinanzas->getFechaEdicion() ?></td>
			<!--<td><?php echo $AlpzaMiembroFinanzas->getFechaPublicacion() ?></td>-->
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn"
	href="<?php echo url_for('miembroInformacionFinanciera/new') ?>">Nueva</a>
</div>
</div>
