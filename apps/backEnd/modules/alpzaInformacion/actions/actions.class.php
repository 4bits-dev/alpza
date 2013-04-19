<?php

/**
 * alpzaInformacion actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaInformacion
 * @author     Your name here
 */
class alpzaInformacionActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaInformacions = AlpzaInformacionPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaInformacion = AlpzaInformacionPeer::retrieveByPk($request->getParameter('id_alpza_informacion'));
		$this->forward404Unless($this->AlpzaInformacion);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaInformacionForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaInformacionForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaInformacion = AlpzaInformacionPeer::retrieveByPk($request->getParameter('id_alpza_informacion')), sprintf('Object AlpzaInformacion does not exist (%s).', $request->getParameter('id_alpza_informacion')));
		$this->form = new AlpzaInformacionForm($AlpzaInformacion);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaInformacion = AlpzaInformacionPeer::retrieveByPk($request->getParameter('id_alpza_informacion')), sprintf('Object AlpzaInformacion does not exist (%s).', $request->getParameter('id_alpza_informacion')));
		$this->form = new AlpzaInformacionForm($AlpzaInformacion);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaInformacion = AlpzaInformacionPeer::retrieveByPk($request->getParameter('id_alpza_informacion')), sprintf('Object AlpzaInformacion does not exist (%s).', $request->getParameter('id_alpza_informacion')));
		$AlpzaInformacion->delete();

		$this->redirect('alpzaInformacion/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaInformacion = $form->save();

			$this->redirect('alpzaInformacion/edit?id_alpza_informacion='.$AlpzaInformacion->getIdAlpzaInformacion());
		}
	}
}
