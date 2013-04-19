<?php

/**
 * autentificacion actions.
 *
 * @package    alpzaDev
 * @subpackage autentificacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autentificacionActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex($http) {
		$autentificacion = new BasesfGuardAuthActions();
		$routing=sfConfig::get('app_backend_routing');
		$autentificacion->executeSingincustom($http, $routing);
	}
}
