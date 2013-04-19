<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Asociaciones Nacionales</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id alpza miembro nacionales</th>
			<th>Alpza miembro id alpza miembro</th>
			<th>Nombre formal</th>
			<th>Sigla</th>
			<th>Numero identificacion</th>
			<th>Ano fundacion</th>
			<th>Ano ingreso alpza</th>
			<th>Director nombre</th>
			<th>Director email</th>
			<th>Personal permanente</th>
			<th>Personal temporal</th>
			<th>Delegado nombre</th>
			<th>Delegado apellido</th>
			<th>Delegado profesion</th>
			<th>Delegado cargo</th>
			<th>Delegado email</th>
			<th>Logo</th>
			<th>Direccion</th>
			<th>Codigo postal</th>
			<th>Pais</th>
			<th>Telefono cod ciudad</th>
			<th>Telefono cod pais</th>
			<th>Telefono</th>
			<th>Fax</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Sitio web</th>
			<th>Naturaleza juridica publica</th>
			<th>Naturaleza juridica privada</th>
			<th>Naturaleza juridica mixta</th>
			<th>Propietario</th>
			<th>Lucro</th>
			<th>Numero instituciones miembro</th>
			<th>Porcentaje covertura nacional</th>
			<th>Lista instituciones miembro</th>
			<th>Estatutos</th>
			<th>Organigrama</th>
			<th>Otra asociacion</th>
			<th>Descripcion</th>
			<th>Mision</th>
			<th>Vision</th>
			<th>Objetivo</th>
			<th>Panorama general</th>
			<th>Proyectos</th>
			<th>Area trabajo</th>
			<th>Considera apoyo alpza</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroNacionaless as $AlpzaMiembroNacionales): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroNacionales/show?id_alpza_miembro_nacionales=' . $AlpzaMiembroNacionales->getIdAlpzaMiembroNacionales()) ?>"><?php echo $AlpzaMiembroNacionales->getIdAlpzaMiembroNacionales() ?></a></td>
			<td><?php echo $AlpzaMiembroNacionales->getAlpzaMiembroIdAlpzaMiembro() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNombreFormal() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getSigla() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNumeroIdentificacion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getAnoFundacion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getAnoIngresoAlpza() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDirectorNombre() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDirectorEmail() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPersonalPermanente() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPersonalTemporal() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDelegadoNombre() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDelegadoApellido() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDelegadoProfesion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDelegadoCargo() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDelegadoEmail() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getLogo() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDireccion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getCodigoPostal() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPais() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getTelefonoCodCiudad() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getTelefonoCodPais() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getTelefono() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getFax() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getCelular() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getEmail() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getSitioWeb() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNaturalezaJuridicaPublica() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNaturalezaJuridicaPrivada() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNaturalezaJuridicaMixta() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPropietario() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getLucro() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getNumeroInstitucionesMiembro() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPorcentajeCoverturaNacional() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getListaInstitucionesMiembro() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getEstatutos() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getOrganigrama() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getOtraAsociacion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getDescripcion() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getMision() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getVision() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getObjetivo() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getPanoramaGeneral() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getProyectos() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getAreaTrabajo() ?></td>
			<td><?php echo $AlpzaMiembroNacionales->getConsideraApoyoAlpza() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('miembroNacionales/new') ?>">Nuevo</a>

</div>
</div>
