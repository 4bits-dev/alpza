<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id sf guard profile:</th>
          <td><?php echo $SfGuardProfile->getIdSfGuardProfile() ?></td>
        </tr>
        <tr>
          <th>Id sf guard user:</th>
          <td><?php echo $SfGuardProfile->getIdSfGuardUser() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $SfGuardProfile->getNombre() ?></td>
		</tr>
		<tr>
			<th>Apellido:</th>
			<td><?php echo $SfGuardProfile->getApellido() ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $SfGuardProfile->getEmail() ?></td>
		</tr>
		<tr>
			<th>Teléfono:</th>
			<td><?php echo $SfGuardProfile->getTelefono() ?></td>
		</tr>
		<tr>
			<th>Celular:</th>
			<td><?php echo $SfGuardProfile->getCelular() ?></td>
		</tr>
		<tr>
			<th>Fecha nacimiento:</th>
			<td><?php echo $SfGuardProfile->getFechaNacimiento() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $SfGuardProfile->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $SfGuardProfile->getFechaEdicion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('usuarioPerfil/edit?id_sf_guard_profile=' . $SfGuardProfile->getIdSfGuardProfile()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('usuarioPerfil/index') ?>">Listar</a></div>
</div>
