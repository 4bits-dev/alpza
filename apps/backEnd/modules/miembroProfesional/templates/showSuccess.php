<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Id alpza miembro profesional:</th>
			<td><?php echo $AlpzaMiembroProfesional->getIdAlpzaMiembroProfesional() ?></td>
		</tr>
		<tr>
			<th>Alpza miembro id alpza miembro:</th>
			<td><?php echo $AlpzaMiembroProfesional->getAlpzaMiembroIdAlpzaMiembro() ?></td>
		</tr>
		<tr>
			<th>Nombre formal:</th>
			<td><?php echo $AlpzaMiembroProfesional->getNombreFormal() ?></td>
		</tr>
		<tr>
			<th>Sigla:</th>
			<td><?php echo $AlpzaMiembroProfesional->getSigla() ?></td>
		</tr>
		<tr>
			<th>Numero identificacion:</th>
			<td><?php echo $AlpzaMiembroProfesional->getNumeroIdentificacion() ?></td>
		</tr>
		<tr>
			<th>Ano ingreso alpza:</th>
			<td><?php echo $AlpzaMiembroProfesional->getAnoIngresoAlpza() ?></td>
		</tr>
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaMiembroProfesional->getNombre() ?></td>
		</tr>
		<tr>
			<th>Apellido:</th>
			<td><?php echo $AlpzaMiembroProfesional->getApellido() ?></td>
		</tr>
		<tr>
			<th>Profesion:</th>
			<td><?php echo $AlpzaMiembroProfesional->getProfesion() ?></td>
		</tr>
		<tr>
			<th>Trabajo:</th>
			<td><?php echo $AlpzaMiembroProfesional->getTrabajo() ?></td>
		</tr>
		<tr>
			<th>Cargo:</th>
			<td><?php echo $AlpzaMiembroProfesional->getCargo() ?></td>
		</tr>
		<tr>
			<th>Otra asociacion:</th>
			<td><?php echo $AlpzaMiembroProfesional->getOtraAsociacion() ?></td>
		</tr>
		<tr>
			<th>Direccion:</th>
			<td><?php echo $AlpzaMiembroProfesional->getDireccion() ?></td>
		</tr>
		<tr>
			<th>Codigo postal:</th>
			<td><?php echo $AlpzaMiembroProfesional->getCodigoPostal() ?></td>
		</tr>
		<tr>
			<th>Pais:</th>
			<td><?php echo $AlpzaMiembroProfesional->getPais() ?></td>
		</tr>
		<tr>
			<th>Telefono cod ciudad:</th>
			<td><?php echo $AlpzaMiembroProfesional->getTelefonoCodCiudad() ?></td>
		</tr>
		<tr>
			<th>Telefono cod pais:</th>
			<td><?php echo $AlpzaMiembroProfesional->getTelefonoCodPais() ?></td>
		</tr>
		<tr>
			<th>Telefono:</th>
			<td><?php echo $AlpzaMiembroProfesional->getTelefono() ?></td>
		</tr>
		<tr>
			<th>Celular:</th>
			<td><?php echo $AlpzaMiembroProfesional->getCelular() ?></td>
		</tr>
		<tr>
			<th>Fax:</th>
			<td><?php echo $AlpzaMiembroProfesional->getFax() ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $AlpzaMiembroProfesional->getEmail() ?></td>
		</tr>
		<tr>
			<th>Sitio web:</th>
			<td><?php echo $AlpzaMiembroProfesional->getSitioWeb() ?></td>
		</tr>
		<tr>
			<th>Intereses principales:</th>
			<td><?php echo $AlpzaMiembroProfesional->getInteresesPrincipales() ?></td>
		</tr>
		<tr>
			<th>Area tematica interes:</th>
			<td><?php echo $AlpzaMiembroProfesional->getAreaTematicaInteres() ?></td>
		</tr>
		<tr>
			<th>Area experiencia:</th>
			<td><?php echo $AlpzaMiembroProfesional->getAreaExperiencia() ?></td>
		</tr>
		<tr>
			<th>Proyecto:</th>
			<td><?php echo $AlpzaMiembroProfesional->getProyecto() ?></td>
		</tr>
		<tr>
			<th>Publicacion:</th>
			<td><?php echo $AlpzaMiembroProfesional->getPublicacion() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembroProfesional/edit?id_alpza_miembro_profesional=' . $AlpzaMiembroProfesional->getIdAlpzaMiembroProfesional()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('miembroProfesional/index') ?>">Listar</a></div>
</div>
