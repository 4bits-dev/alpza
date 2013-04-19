<?php

/**
 * sistema actions.
 *
 * @package    alpzaDev
 * @subpackage sistema
 * @author     4BITS
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sistemaActions extends sfActions {

	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeSistema() {

	}

	public function executeSistemabootstrap() {
		$this->setLayout('layoutBootStrap');
		$this->user = $this->getUser();
	}

	public function executeError() {
		return $this->renderText("Error");
	}

}
