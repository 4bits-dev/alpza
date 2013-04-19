<?php

/**
 * usuarioPerfil actions.
 *
 * @package    alpzaDev
 * @subpackage usuarioPerfil
 * @author     Your name here
 */
class usuarioPerfilActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->SfGuardProfiles = SfGuardProfilePeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->SfGuardProfile = SfGuardProfilePeer::retrieveByPk($request->getParameter('id_sf_guard_profile'));
		$this->forward404Unless($this->SfGuardProfile);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new SfGuardProfileForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new SfGuardProfileForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($SfGuardProfile = SfGuardProfilePeer::retrieveByPk($request->getParameter('id_sf_guard_profile')), sprintf('Object SfGuardProfile does not exist (%s).', $request->getParameter('id_sf_guard_profile')));
		$this->form = new SfGuardProfileForm($SfGuardProfile);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($SfGuardProfile = SfGuardProfilePeer::retrieveByPk($request->getParameter('id_sf_guard_profile')), sprintf('Object SfGuardProfile does not exist (%s).', $request->getParameter('id_sf_guard_profile')));
		$this->form = new SfGuardProfileForm($SfGuardProfile);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($SfGuardProfile = SfGuardProfilePeer::retrieveByPk($request->getParameter('id_sf_guard_profile')), sprintf('Object SfGuardProfile does not exist (%s).', $request->getParameter('id_sf_guard_profile')));
		$SfGuardProfile->delete();

		$this->redirect('usuarioPerfil/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$SfGuardProfile = $form->save();

			$this->redirect('usuarioPerfil/edit?id_sf_guard_profile='.$SfGuardProfile->getIdSfGuardProfile());
		}
	}
}
