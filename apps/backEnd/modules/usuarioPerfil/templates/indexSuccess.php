<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Perfíl de Usuario</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id sf guard user</th>-->
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Fecha nacimiento</th>
			<!--<th>Fecha ingreso</th>-->
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($SfGuardProfiles as $SfGuardProfile): ?>
		<tr>
			<td><a
				href="<?php echo url_for('usuarioPerfil/show?id_sf_guard_profile=' . $SfGuardProfile->getIdSfGuardProfile()) ?>">Editar</a></td>
			<!--<td><?php echo $SfGuardProfile->getIdSfGuardUser() ?></td>-->
			<td><?php echo $SfGuardProfile->getNombre() ?></td>
			<td><?php echo $SfGuardProfile->getApellido() ?></td>
			<td><?php echo $SfGuardProfile->getEmail() ?></td>
			<td><?php echo $SfGuardProfile->getTelefono() ?></td>
			<td><?php echo $SfGuardProfile->getCelular() ?></td>
			<td><?php echo $SfGuardProfile->getFechaNacimiento() ?></td>
			<!--<td><?php echo $SfGuardProfile->getFechaIngreso() ?></td>-->
			<td><?php echo $SfGuardProfile->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('usuarioPerfil/new') ?>">Nuevo</a>

</div>
</div>
