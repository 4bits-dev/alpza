<?php

/**
 * alpzaJunta actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaJunta
 * @author     Your name here
 */
class alpzaJuntaActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaJuntas = AlpzaJuntaPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaJunta = AlpzaJuntaPeer::retrieveByPk($request->getParameter('id_alpza_junta'));
		$this->forward404Unless($this->AlpzaJunta);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaJuntaForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaJuntaForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaJunta = AlpzaJuntaPeer::retrieveByPk($request->getParameter('id_alpza_junta')), sprintf('Object AlpzaJunta does not exist (%s).', $request->getParameter('id_alpza_junta')));
		$this->form = new AlpzaJuntaForm($AlpzaJunta);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaJunta = AlpzaJuntaPeer::retrieveByPk($request->getParameter('id_alpza_junta')), sprintf('Object AlpzaJunta does not exist (%s).', $request->getParameter('id_alpza_junta')));
		$this->form = new AlpzaJuntaForm($AlpzaJunta);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaJunta = AlpzaJuntaPeer::retrieveByPk($request->getParameter('id_alpza_junta')), sprintf('Object AlpzaJunta does not exist (%s).', $request->getParameter('id_alpza_junta')));
		$AlpzaJunta->delete();

		$this->redirect('alpzaJunta/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaJunta = $form->save();

			$this->redirect('alpzaJunta/edit?id_alpza_junta='.$AlpzaJunta->getIdAlpzaJunta());
		}
	}
}
