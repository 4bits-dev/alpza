<?php

/**
 * miembroProfesional actions.
 *
 * @package    alpzaDev
 * @subpackage miembroProfesional
 * @author     Your name here
 */
class miembroProfesionalActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroProfesionals = AlpzaMiembroProfesionalPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroProfesional = AlpzaMiembroProfesionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_profesional'));
		$this->forward404Unless($this->AlpzaMiembroProfesional);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroProfesionalForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroProfesionalForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroProfesional = AlpzaMiembroProfesionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_profesional')), sprintf('Object AlpzaMiembroProfesional does not exist (%s).', $request->getParameter('id_alpza_miembro_profesional')));
		$this->form = new AlpzaMiembroProfesionalForm($AlpzaMiembroProfesional);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroProfesional = AlpzaMiembroProfesionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_profesional')), sprintf('Object AlpzaMiembroProfesional does not exist (%s).', $request->getParameter('id_alpza_miembro_profesional')));
		$this->form = new AlpzaMiembroProfesionalForm($AlpzaMiembroProfesional);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroProfesional = AlpzaMiembroProfesionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_profesional')), sprintf('Object AlpzaMiembroProfesional does not exist (%s).', $request->getParameter('id_alpza_miembro_profesional')));
		$AlpzaMiembroProfesional->delete();

		$this->redirect('miembroProfesional/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroProfesional = $form->save();

			$this->redirect('miembroProfesional/edit?id_alpza_miembro_profesional='.$AlpzaMiembroProfesional->getIdAlpzaMiembroProfesional());
		}
	}
}
