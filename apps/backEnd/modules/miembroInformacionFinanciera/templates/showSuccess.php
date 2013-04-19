<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza miembro finanzas:</th>
          <td><?php echo $AlpzaMiembroFinanzas->getIdAlpzaMiembroFinanzas() ?></td>
        </tr>
        <tr>
          <th>Id alpza miembro:</th>
          <td><?php echo $AlpzaMiembroFinanzas->getIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Cuenta:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getCuenta() ?></td>
		</tr>
		<tr>
			<th>Institución:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getInstitucion() ?></td>
		</tr>
		<tr>
			<th>Dirección:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getDireccion() ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getEmail() ?></td>
		</tr>
		<tr>
			<th>Duración:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getDuracion() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha ingreso:</th>
          <td><?php echo $AlpzaMiembroFinanzas->getFechaIngreso() ?></td>
        </tr>-->
		<tr>
			<th>Fecha edición:</th>
			<td><?php echo $AlpzaMiembroFinanzas->getFechaEdicion() ?></td>
		</tr>
		<!--<tr>
          <th>Fecha publicacion:</th>
          <td><?php echo $AlpzaMiembroFinanzas->getFechaPublicacion() ?></td>
        </tr>-->
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembroInformacionFinanciera/edit?id_alpza_miembro_finanzas=' . $AlpzaMiembroFinanzas->getIdAlpzaMiembroFinanzas()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('miembroInformacionFinanciera/index') ?>">Listar</a>
</div>
</div>
