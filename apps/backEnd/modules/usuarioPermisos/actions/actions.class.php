<?php

/**
 * usuarioPermisos actions.
 *
 * @package    alpzaDev
 * @subpackage usuarioPermisos
 * @author     Your name here
 */
class usuarioPermisosActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardPermissions = sfGuardPermissionPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardPermission = sfGuardPermissionPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->sfGuardPermission);
	}

	public function executeNew(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->form = new sfGuardPermissionForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new sfGuardPermissionForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($sfGuardPermission = sfGuardPermissionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardPermission does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardPermissionForm($sfGuardPermission);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($sfGuardPermission = sfGuardPermissionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardPermission does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardPermissionForm($sfGuardPermission);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$request->checkCSRFProtection();

		$this->forward404Unless($sfGuardPermission = sfGuardPermissionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardPermission does not exist (%s).', $request->getParameter('id')));
		$sfGuardPermission->delete();

		$this->redirect('usuarioPermisos/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) {
		$this->setLayout('layoutBootStrap');
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$sfGuardPermission = $form->save();

			$this->redirect('usuarioPermisos/edit?id=' . $sfGuardPermission->getId());
		}
	}

}
