<?php

/**
 * usuarioGrupos actions.
 *
 * @package    alpzaDev
 * @subpackage usuarioGrupos
 * @author     Your name here
 */
class usuarioGruposActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardGroups = sfGuardGroupPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardGroup = sfGuardGroupPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->sfGuardGroup);
	}

	public function executeNew(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->form = new sfGuardGroupForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new sfGuardGroupForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($sfGuardGroup = sfGuardGroupPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardGroup does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardGroupForm($sfGuardGroup);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($sfGuardGroup = sfGuardGroupPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardGroup does not exist (%s).', $request->getParameter('id')));
		$this->form = new sfGuardGroupForm($sfGuardGroup);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$request->checkCSRFProtection();

		$this->forward404Unless($sfGuardGroup = sfGuardGroupPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardGroup does not exist (%s).', $request->getParameter('id')));
		$sfGuardGroup->delete();

		$this->redirect('usuarioGrupos/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) {
		$this->setLayout('layoutBootStrap');
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$sfGuardGroup = $form->save();

			$this->redirect('usuarioGrupos/edit?id=' . $sfGuardGroup->getId());
		}
	}

}
