<?php

/**
 * usuarioAsociadoGrupo actions.
 *
 * @package    alpzaDev
 * @subpackage usuarioAsociadoGrupo
 * @author     Your name here
 */
class usuarioAsociadoGrupoActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardUserGroups = sfGuardUserGroupPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->sfGuardUserGroup = sfGuardUserGroupPeer::retrieveByPk($request->getParameter('user_id'), $request->getParameter('group_id'));
		$this->forward404Unless($this->sfGuardUserGroup);
	}

	public function executeNew(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->form = new sfGuardUserGroupForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new sfGuardUserGroupForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($sfGuardUserGroup = sfGuardUserGroupPeer::retrieveByPk($request->getParameter('user_id'), $request->getParameter('group_id')), sprintf('Object sfGuardUserGroup does not exist (%s).', $request->getParameter('user_id'), $request->getParameter('group_id')));
		$this->form = new sfGuardUserGroupForm($sfGuardUserGroup);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($sfGuardUserGroup = sfGuardUserGroupPeer::retrieveByPk($request->getParameter('user_id'), $request->getParameter('group_id')), sprintf('Object sfGuardUserGroup does not exist (%s).', $request->getParameter('user_id'), $request->getParameter('group_id')));
		$this->form = new sfGuardUserGroupForm($sfGuardUserGroup);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$request->checkCSRFProtection();

		$this->forward404Unless($sfGuardUserGroup = sfGuardUserGroupPeer::retrieveByPk($request->getParameter('user_id'), $request->getParameter('group_id')), sprintf('Object sfGuardUserGroup does not exist (%s).', $request->getParameter('user_id'), $request->getParameter('group_id')));
		$sfGuardUserGroup->delete();

		$this->redirect('usuarioAsociadoGrupo/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) {
		$this->setLayout('layoutBootStrap');
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$sfGuardUserGroup = $form->save();

			$this->redirect('usuarioAsociadoGrupo/edit?user_id=' . $sfGuardUserGroup->getUserId() . '&group_id=' . $sfGuardUserGroup->getGroupId());
		}
	}

}
