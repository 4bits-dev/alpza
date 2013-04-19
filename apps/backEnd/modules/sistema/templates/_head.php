
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid"><a class="btn btn-navbar"
	data-toggle="collapse" data-target=".nav-collapse"> <span
	class="icon-bar"></span> <span class="icon-bar"></span> <span
	class="icon-bar"></span> </a> <?php echo link_to("Sistema de Gestión ALPZA","@backend_home","class='brand'")?>
<div class="nav-collapse collapse">
<p class="navbar-text pull-right">Conectado como, <?php echo link_to($sf_user->getUserName(),"@backend_home","class='navbar-link'")?>
</p>
<ul class="nav">
	<!--<li class="active"><a href="#">Home</a></li>
              <li><a href="#">Página 1</a></li>
              <li><a href="#">Página 2</a></li>-->
	<li><?php echo link_to('Cerrar Sesión','@sf_guard_signout')?></li>
</ul>
</div>
<!--/.nav-collapse --></div>
</div>
</div>
