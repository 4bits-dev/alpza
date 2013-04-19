<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-horizontal"
	action="<?php echo url_for('usuarioPerfil/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_sf_guard_profile='.$form->getObject()->getIdSfGuardProfile() : '')) ?>"
	method="post"
	<?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
	<?php if (!$form->getObject()->isNew()): ?> <input type="hidden"
	name="sf_method" value="put" /> <?php endif; ?>
<table class="table">
	<tfoot>
		<tr>
			<td colspan="2">&nbsp;<a class="btn"
				href="<?php echo url_for('usuarioPerfil/index') ?>">Atrás</a> <?php if (!$form->getObject()->isNew()): ?>
			&nbsp;<?php echo link_to('Borrar', 'usuarioPerfil/delete?id_sf_guard_profile='.$form->getObject()->getIdSfGuardProfile(), array('method' => 'delete', 'confirm' => 'Estás seguro?', 'class' => 'btn btn-danger')) ?>
			<?php endif; ?> <input class="btn btn-primary" type="submit"
				value="Guardar" /></td>
		</tr>
	</tfoot>
	<tbody>
	<?php echo $form ?>
	</tbody>
</table>
</form>
