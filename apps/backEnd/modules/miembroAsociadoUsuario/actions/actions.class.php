<?php

/**
 * miembroAsociadoUsuario actions.
 *
 * @package    alpzaDev
 * @subpackage miembroAsociadoUsuario
 * @author     Your name here
 */
class miembroAsociadoUsuarioActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroAsignados = AlpzaMiembroAsignadoPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroAsignado = AlpzaMiembroAsignadoPeer::retrieveByPk($request->getParameter('id'));
		$this->forward404Unless($this->AlpzaMiembroAsignado);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroAsignadoForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroAsignadoForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroAsignado = AlpzaMiembroAsignadoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object AlpzaMiembroAsignado does not exist (%s).', $request->getParameter('id')));
		$this->form = new AlpzaMiembroAsignadoForm($AlpzaMiembroAsignado);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroAsignado = AlpzaMiembroAsignadoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object AlpzaMiembroAsignado does not exist (%s).', $request->getParameter('id')));
		$this->form = new AlpzaMiembroAsignadoForm($AlpzaMiembroAsignado);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroAsignado = AlpzaMiembroAsignadoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object AlpzaMiembroAsignado does not exist (%s).', $request->getParameter('id')));
		$AlpzaMiembroAsignado->delete();

		$this->redirect('miembroAsociadoUsuario/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroAsignado = $form->save();

			$this->redirect('miembroAsociadoUsuario/edit?id='.$AlpzaMiembroAsignado->getId());
		}
	}
}
