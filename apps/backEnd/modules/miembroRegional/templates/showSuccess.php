<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Id alpza miembro regional:</th>
			<td><?php echo $AlpzaMiembroRegional->getIdAlpzaMiembroRegional() ?></td>
		</tr>
		<tr>
			<th>Alpza miembro id alpza miembro:</th>
			<td><?php echo $AlpzaMiembroRegional->getAlpzaMiembroIdAlpzaMiembro() ?></td>
		</tr>
		<tr>
			<th>Nombre formal:</th>
			<td><?php echo $AlpzaMiembroRegional->getNombreFormal() ?></td>
		</tr>
		<tr>
			<th>Sigla:</th>
			<td><?php echo $AlpzaMiembroRegional->getSigla() ?></td>
		</tr>
		<tr>
			<th>Director nombre:</th>
			<td><?php echo $AlpzaMiembroRegional->getDirectorNombre() ?></td>
		</tr>
		<tr>
			<th>Director email:</th>
			<td><?php echo $AlpzaMiembroRegional->getDirectorEmail() ?></td>
		</tr>
		<tr>
			<th>Numero identificacion:</th>
			<td><?php echo $AlpzaMiembroRegional->getNumeroIdentificacion() ?></td>
		</tr>
		<tr>
			<th>Ano fundacion:</th>
			<td><?php echo $AlpzaMiembroRegional->getAnoFundacion() ?></td>
		</tr>
		<tr>
			<th>Ano ingreso alpza:</th>
			<td><?php echo $AlpzaMiembroRegional->getAnoIngresoAlpza() ?></td>
		</tr>
		<tr>
			<th>Delegado nombre:</th>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoNombre() ?></td>
		</tr>
		<tr>
			<th>Delegado apellido:</th>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoApellido() ?></td>
		</tr>
		<tr>
			<th>Delegado profesion:</th>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoProfesion() ?></td>
		</tr>
		<tr>
			<th>Delegado cargo:</th>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoCargo() ?></td>
		</tr>
		<tr>
			<th>Delegado email:</th>
			<td><?php echo $AlpzaMiembroRegional->getDelegadoEmail() ?></td>
		</tr>
		<tr>
			<th>Logo:</th>
			<td><?php echo $AlpzaMiembroRegional->getLogo() ?></td>
		</tr>
		<tr>
			<th>Direccion:</th>
			<td><?php echo $AlpzaMiembroRegional->getDireccion() ?></td>
		</tr>
		<tr>
			<th>Telefono cod ciudad:</th>
			<td><?php echo $AlpzaMiembroRegional->getTelefonoCodCiudad() ?></td>
		</tr>
		<tr>
			<th>Telefono cod pais:</th>
			<td><?php echo $AlpzaMiembroRegional->getTelefonoCodPais() ?></td>
		</tr>
		<tr>
			<th>Telefono:</th>
			<td><?php echo $AlpzaMiembroRegional->getTelefono() ?></td>
		</tr>
		<tr>
			<th>Fax:</th>
			<td><?php echo $AlpzaMiembroRegional->getFax() ?></td>
		</tr>
		<tr>
			<th>Celular:</th>
			<td><?php echo $AlpzaMiembroRegional->getCelular() ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $AlpzaMiembroRegional->getEmail() ?></td>
		</tr>
		<tr>
			<th>Sitio web:</th>
			<td><?php echo $AlpzaMiembroRegional->getSitioWeb() ?></td>
		</tr>
		<tr>
			<th>Mision:</th>
			<td><?php echo $AlpzaMiembroRegional->getMision() ?></td>
		</tr>
		<tr>
			<th>Vision:</th>
			<td><?php echo $AlpzaMiembroRegional->getVision() ?></td>
		</tr>
		<tr>
			<th>Descripcion:</th>
			<td><?php echo $AlpzaMiembroRegional->getDescripcion() ?></td>
		</tr>
		<tr>
			<th>Objetivo:</th>
			<td><?php echo $AlpzaMiembroRegional->getObjetivo() ?></td>
		</tr>
		<tr>
			<th>Proyectos:</th>
			<td><?php echo $AlpzaMiembroRegional->getProyectos() ?></td>
		</tr>
		<tr>
			<th>Pais:</th>
			<td><?php echo $AlpzaMiembroRegional->getPais() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembroRegional/edit?id_alpza_miembro_regional=' . $AlpzaMiembroRegional->getIdAlpzaMiembroRegional()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('miembroRegional/index') ?>">Listar</a></div>
</div>
