<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<form class="form-horizontal"
	action="<?php echo url_for('miembroRegional/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_alpza_miembro_regional='.$form->getObject()->getIdAlpzaMiembroRegional() : '')) ?>"
	method="post"
	<?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
	<?php if (!$form->getObject()->isNew()): ?> <input type="hidden"
	name="sf_method" value="put" /> <?php endif; ?>
<table class="table">
	<tfoot>
		<tr>
			<td colspan="2">&nbsp;<a class="btn"
				href="<?php echo url_for('miembroRegional/index') ?>">Atrás</a> <?php if (!$form->getObject()->isNew()): ?>
			&nbsp;<?php echo link_to('Borrar', 'miembroRegional/delete?id_alpza_miembro_regional='.$form->getObject()->getIdAlpzaMiembroRegional(), array('method' => 'delete', 'confirm' => 'Está seguro?', 'class' => 'btn btn-danger')) ?>
			<?php endif; ?> <input class="btn btn-primary" type="submit"
				value="Guardar" /></td>
		</tr>
	</tfoot>
	<tbody>
	<?php echo $form ?>
	</tbody>
</table>
</form>
