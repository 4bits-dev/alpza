<?php

/**
 * home actions.
 *
 * @package    alpzaDev
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeHome($http){
		$user = $this->getUser();
		$this->getUser()->getCulture();
		$this->form = new LoginClassForm();
		if ($user->isAuthenticated()) {
			return $this->redirect('http://localhost/alpza/administrador/sistema');
		}

		if ($http->isXmlHttpRequest()) {
			$this->getResponse()->setHeaderOnly(true);
			$this->getResponse()->setStatusCode(401);
			return sfView::NONE;
		}

		if ($http->isMethod('post')) {
			$this->form->bind($http->getParameter('signin'));
			if ($this->form->isValid()) {
				$values = $this->form->getValues();
				$this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);
				return $this->redirect('http://localhost/alpza/administrador/sistema');
			}
		}
	}

	public function executeSlidercentral(){
		$page = new page();
		$this->slide = $page->getSlidercentral();
	}
}
