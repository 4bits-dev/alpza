<?php

/**
 * miembro actions.
 *
 * @package    alpzaDev
 * @subpackage miembro
 * @author     Your name here
 */
class miembroActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembros = AlpzaMiembroPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembro = AlpzaMiembroPeer::retrieveByPk($request->getParameter('id_alpza_miembro'));
		$this->forward404Unless($this->AlpzaMiembro);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembro = AlpzaMiembroPeer::retrieveByPk($request->getParameter('id_alpza_miembro')), sprintf('Object AlpzaMiembro does not exist (%s).', $request->getParameter('id_alpza_miembro')));
		$this->form = new AlpzaMiembroForm($AlpzaMiembro);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembro = AlpzaMiembroPeer::retrieveByPk($request->getParameter('id_alpza_miembro')), sprintf('Object AlpzaMiembro does not exist (%s).', $request->getParameter('id_alpza_miembro')));
		$this->form = new AlpzaMiembroForm($AlpzaMiembro);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembro = AlpzaMiembroPeer::retrieveByPk($request->getParameter('id_alpza_miembro')), sprintf('Object AlpzaMiembro does not exist (%s).', $request->getParameter('id_alpza_miembro')));
		$AlpzaMiembro->delete();

		$this->redirect('miembro/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembro = $form->save();

			$this->redirect('miembro/edit?id_alpza_miembro='.$AlpzaMiembro->getIdAlpzaMiembro());
		}
	}
}
