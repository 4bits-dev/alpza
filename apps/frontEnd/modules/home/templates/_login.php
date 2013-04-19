<div id="login">
<form action="<?php echo url_for('@alpzaHome') ?>" method="post">
<ul>
<?php echo $form['username']->renderRow() ?>
</ul>
<ul>
<?php echo $form['password']->renderRow() ?>
</ul>
<ul>
	<input type="image" src="images/home/btn-enviar.png" value=""
		onsubmit="submit.form();" />
</ul>
<?php echo $form['_csrf_token'] ?></form>
</div>
