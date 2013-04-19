<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Asociaciones Regionales y Globales</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id alpza miembro regional</th>
			<th>Alpza miembro id alpza miembro</th>
			<th>Nombre formal</th>
			<th>Sigla</th>
			<th>Director nombre</th>
			<th>Director email</th>
			<th>Numero identificacion</th>
			<th>Ano fundacion</th>
			<th>Ano ingreso alpza</th>
			<th>Delegado nombre</th>
			<th>Delegado apellido</th>
			<th>Delegado profesion</th>
			<th>Delegado cargo</th>
			<th>Delegado email</th>
			<th>Logo</th>
			<th>Direccion</th>
			<th>Telefono cod ciudad</th>
			<th>Telefono cod pais</th>
			<th>Telefono</th>
			<th>Fax</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Sitio web</th>
			<th>Mision</th>
			<th>Vision</th>
			<th>Descripcion</th>
			<th>Objetivo</th>
			<th>Proyectos</th>
			<th>Pais</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroRegionals as $AlpzaMiembroRegional): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroRegional/show?id_alpza_miembro_regional=' . $AlpzaMiembroRegional->getIdAlpzaMiembroRegional()) ?>"><?php echo $AlpzaMiembroRegional->getIdAlpzaMiembroRegional() ?></a></td>
			<td><?php echo $AlpzaMiembroRegional->getAlpzaMiembroIdAlpzaMiembro() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getNombreFormal() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getSigla() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDirectorNombre() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDirectorEmail() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getNumeroIdentificacion() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getAnoFundacion() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getAnoIngresoAlpza() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoNombre() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoApellido() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoProfesion() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoCargo() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoEmail() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getLogo() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDireccion() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getTelefonoCodCiudad() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getTelefonoCodPais() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getTelefono() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getFax() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getCelular() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getEmail() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getSitioWeb() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getMision() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getVision() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getDescripcion() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getObjetivo() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getProyectos() ?></td>
			<td><?php echo $AlpzaMiembroRegional->getPais() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('miembroRegional/new') ?>">Nuevo</a>

</div>
</div>
