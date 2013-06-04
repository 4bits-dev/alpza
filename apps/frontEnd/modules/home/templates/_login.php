<div id="login">
	<form action="<?php echo url_for('@alpzaHome') ?>" method="post">
		<ul>
		<?php echo $form['username']->renderRow() ?>
		</ul>
		<ul>
		<?php echo $form['password']->renderRow() ?>
		</ul>
		<ul>
		<?php echo image_tag('home/btn-enviar.png',array('id'=>'img_form_login','style'=>'cursor:pointer')) ?>
		</ul>
		<ul>
			<b>Hazte Miembro</b>
		</ul>
		<ul>Recupera tu contraseña
		</ul>
		<?php echo $form['_csrf_token'] ?>
	</form>
</div>

<div id="banner">

</div>

<script type="text/javascript">
$("#img_form_login").click(function(){
	$("form").submit();	
});
</script>
