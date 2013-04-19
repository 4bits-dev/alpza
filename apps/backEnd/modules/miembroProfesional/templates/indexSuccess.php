<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Miembros Profesionales</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id alpza miembro profesional</th>
			<th>Alpza miembro id alpza miembro</th>
			<th>Nombre formal</th>
			<th>Sigla</th>
			<th>Numero identificacion</th>
			<th>Ano ingreso alpza</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Profesion</th>
			<th>Trabajo</th>
			<th>Cargo</th>
			<th>Otra asociacion</th>
			<th>Direccion</th>
			<th>Codigo postal</th>
			<th>Pais</th>
			<th>Telefono cod ciudad</th>
			<th>Telefono cod pais</th>
			<th>Telefono</th>
			<th>Celular</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Sitio web</th>
			<th>Intereses principales</th>
			<th>Area tematica interes</th>
			<th>Area experiencia</th>
			<th>Proyecto</th>
			<th>Publicacion</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroProfesionals as $AlpzaMiembroProfesional): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroProfesional/show?id_alpza_miembro_profesional=' . $AlpzaMiembroProfesional->getIdAlpzaMiembroProfesional()) ?>"><?php echo $AlpzaMiembroProfesional->getIdAlpzaMiembroProfesional() ?></a></td>
			<td><?php echo $AlpzaMiembroProfesional->getAlpzaMiembroIdAlpzaMiembro() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getNombreFormal() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getSigla() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getNumeroIdentificacion() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getAnoIngresoAlpza() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getNombre() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getApellido() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getProfesion() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getTrabajo() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getCargo() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getOtraAsociacion() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getDireccion() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getCodigoPostal() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getPais() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getTelefonoCodCiudad() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getTelefonoCodPais() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getTelefono() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getCelular() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getFax() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getEmail() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getSitioWeb() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getInteresesPrincipales() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getAreaTematicaInteres() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getAreaExperiencia() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getProyecto() ?></td>
			<td><?php echo $AlpzaMiembroProfesional->getPublicacion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('miembroProfesional/new') ?>">Nuevo</a>

</div>
</div>
