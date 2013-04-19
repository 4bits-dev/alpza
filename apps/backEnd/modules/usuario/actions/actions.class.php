<?php

/**
 * usuario actions.
 *
 * @package    alpzaDev
 * @subpackage usuario
 * @author     Your name here
 */
class usuarioActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardUsers = sfGuardUserPeer::doSelect(new Criteria());
		$this->user = $this->getUser();
	}

	public function executeShow(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardUser = sfGuardUserPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->sfGuardUser);
	}

	public function executeNew(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->form = new sfGuardUserForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new sfGuardUserForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($sfGuardUser = sfGuardUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUser does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardUserForm($sfGuardUser);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($sfGuardUser = sfGuardUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUser does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardUserForm($sfGuardUser);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$request->checkCSRFProtection();

		$this->forward404Unless($sfGuardUser = sfGuardUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUser does not exist (%s).', $request->getParameter('id')));
		$sfGuardUser->delete();

		$this->redirect('usuario/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) {
		$this->setLayout('layoutBootStrap');
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$sfGuardUser = $form->save();

			$this->redirect('usuario/edit?id=' . $sfGuardUser->getId());
		}
	}

}
