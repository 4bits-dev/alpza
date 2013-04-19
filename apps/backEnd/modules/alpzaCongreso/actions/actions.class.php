<?php

/**
 * alpzaCongreso actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaCongreso
 * @author     Your name here
 */
class alpzaCongresoActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaCongresos = AlpzaCongresoPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaCongreso = AlpzaCongresoPeer::retrieveByPk($request->getParameter('id_alpza_congreso'));
		$this->forward404Unless($this->AlpzaCongreso);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaCongresoForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaCongresoForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaCongreso = AlpzaCongresoPeer::retrieveByPk($request->getParameter('id_alpza_congreso')), sprintf('Object AlpzaCongreso does not exist (%s).', $request->getParameter('id_alpza_congreso')));
		$this->form = new AlpzaCongresoForm($AlpzaCongreso);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaCongreso = AlpzaCongresoPeer::retrieveByPk($request->getParameter('id_alpza_congreso')), sprintf('Object AlpzaCongreso does not exist (%s).', $request->getParameter('id_alpza_congreso')));
		$this->form = new AlpzaCongresoForm($AlpzaCongreso);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaCongreso = AlpzaCongresoPeer::retrieveByPk($request->getParameter('id_alpza_congreso')), sprintf('Object AlpzaCongreso does not exist (%s).', $request->getParameter('id_alpza_congreso')));
		$AlpzaCongreso->delete();

		$this->redirect('alpzaCongreso/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaCongreso = $form->save();

			$this->redirect('alpzaCongreso/edit?id_alpza_congreso='.$AlpzaCongreso->getIdAlpzaCongreso());
		}
	}
}
