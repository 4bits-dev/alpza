<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Instituciones y Asociados</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id alpza miembro asociados</th>
			<th>Alpza miembro id alpza miembro</th>
			<th>Nombre formal</th>
			<th>Sigla</th>
			<th>Tipo institucion</th>
			<th>Numero identificacion</th>
			<th>Ano fundacion</th>
			<th>Ano ingreso alpza</th>
			<th>Director nombre</th>
			<th>Director email</th>
			<th>Delegado nombre</th>
			<th>Delegado apellido</th>
			<th>Delegado cargo</th>
			<th>Delegado profesion</th>
			<th>Delegado email</th>
			<th>Logo</th>
			<th>Direccion</th>
			<th>Codigo postal</th>
			<th>Pais</th>
			<th>Telefono cod ciudad</th>
			<th>Telefono cod pais</th>
			<th>Telefono</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Fax</th>
			<th>Sitio web</th>
			<th>Descripcion</th>
			<th>Mision</th>
			<th>Vision</th>
			<th>Objetivos</th>
			<th>Acreditacion aza</th>
			<th>Acreditacion iso14001</th>
			<th>Acreditacion iso9001</th>
			<th>Acreditacion otra</th>
			<th>Asociacion waza</th>
			<th>Asociacion aza</th>
			<th>Asociacion eaza</th>
			<th>Asociacion ize</th>
			<th>Asociacion amaczoa</th>
			<th>Asociacion isis</th>
			<th>Asociacion otra</th>
			<th>Marca anillo</th>
			<th>Marca banda</th>
			<th>Marca caliente</th>
			<th>Marca fria</th>
			<th>Marca microchip</th>
			<th>Marca natura</th>
			<th>Marca piquete</th>
			<th>Marca raya</th>
			<th>Marca tatuaje</th>
			<th>Marca otra</th>
			<th>Visitas anuales</th>
			<th>Propietario</th>
			<th>Administrador</th>
			<th>Lucro</th>
			<th>Ofrece asesoria</th>
			<th>Personal permanente</th>
			<th>Personal temporal</th>
			<th>Horario atencion</th>
			<th>Objetivo</th>
			<th>Senalizacion porcentaje</th>
			<th>Zoologico contacto</th>
			<th>Boletin</th>
			<th>Programa enriquecimiento</th>
			<th>Programa entrenamiento</th>
			<th>Programa manejo ambiental</th>
			<th>Programa medicina preventiva</th>
			<th>Consulta externa veterinaria</th>
			<th>Show</th>
			<th>Documento estrategico</th>
			<th>Proyecto conservacion exsitu</th>
			<th>Proyecto conservacion insitu</th>
			<th>Asociacion lista asociaciones</th>
			<th>Asociacion lista instituciones</th>
			<th>Asociacion apoyo desde alpza</th>
			<th>Asociacion apoyo hacia alpza</th>
			<th>Asociacion estatutos</th>
			<th>Asociacion organigrama</th>
			<th>Asociacion panorama pais</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroAsociadoss as $AlpzaMiembroAsociados): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroAsociados/show?id_alpza_miembro_asociados=' . $AlpzaMiembroAsociados->getIdAlpzaMiembroAsociados()) ?>"><?php echo $AlpzaMiembroAsociados->getIdAlpzaMiembroAsociados() ?></a></td>
			<td><?php echo $AlpzaMiembroAsociados->getAlpzaMiembroIdAlpzaMiembro() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getNombreFormal() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getSigla() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getTipoInstitucion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getNumeroIdentificacion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAnoFundacion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAnoIngresoAlpza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDirectorNombre() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDirectorEmail() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDelegadoNombre() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDelegadoApellido() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDelegadoCargo() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDelegadoProfesion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDelegadoEmail() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getLogo() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDireccion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getCodigoPostal() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getPais() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getTelefonoCodCiudad() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getTelefonoCodPais() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getTelefono() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getCelular() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getEmail() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getFax() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getSitioWeb() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDescripcion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMision() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getVision() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getObjetivos() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAcreditacionAza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAcreditacionIso14001() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAcreditacionIso9001() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAcreditacionOtra() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionWaza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionAza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionEaza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionIze() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionAmaczoa() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionIsis() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionOtra() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaAnillo() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaBanda() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaCaliente() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaFria() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaMicrochip() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaNatura() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaPiquete() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaRaya() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaTatuaje() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getMarcaOtra() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getVisitasAnuales() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getPropietario() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAdministrador() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getLucro() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getOfreceAsesoria() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getPersonalPermanente() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getPersonalTemporal() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getHorarioAtencion() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getObjetivo() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getSenalizacionPorcentaje() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getZoologicoContacto() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getBoletin() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProgramaEnriquecimiento() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProgramaEntrenamiento() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProgramaManejoAmbiental() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProgramaMedicinaPreventiva() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getConsultaExternaVeterinaria() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getShow() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getDocumentoEstrategico() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProyectoConservacionExsitu() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getProyectoConservacionInsitu() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionListaAsociaciones() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionListaInstituciones() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionApoyoDesdeAlpza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionApoyoHaciaAlpza() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionEstatutos() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionOrganigrama() ?></td>
			<td><?php echo $AlpzaMiembroAsociados->getAsociacionPanoramaPais() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('miembroAsociados/new') ?>">Nuevo</a>

</div>
</div>
