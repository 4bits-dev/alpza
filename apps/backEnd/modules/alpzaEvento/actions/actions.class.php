<?php

/**
 * alpzaEvento actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaEvento
 * @author     Your name here
 */
class alpzaEventoActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaEventos = AlpzaEventoPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaEvento = AlpzaEventoPeer::retrieveByPk($request->getParameter('id_alpza_evento'));
		$this->forward404Unless($this->AlpzaEvento);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaEventoForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaEventoForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaEvento = AlpzaEventoPeer::retrieveByPk($request->getParameter('id_alpza_evento')), sprintf('Object AlpzaEvento does not exist (%s).', $request->getParameter('id_alpza_evento')));
		$this->form = new AlpzaEventoForm($AlpzaEvento);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaEvento = AlpzaEventoPeer::retrieveByPk($request->getParameter('id_alpza_evento')), sprintf('Object AlpzaEvento does not exist (%s).', $request->getParameter('id_alpza_evento')));
		$this->form = new AlpzaEventoForm($AlpzaEvento);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaEvento = AlpzaEventoPeer::retrieveByPk($request->getParameter('id_alpza_evento')), sprintf('Object AlpzaEvento does not exist (%s).', $request->getParameter('id_alpza_evento')));
		$AlpzaEvento->delete();

		$this->redirect('alpzaEvento/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaEvento = $form->save();

			$this->redirect('alpzaEvento/edit?id_alpza_evento='.$AlpzaEvento->getIdAlpzaEvento());
		}
	}
}
