<?php

/**
 * alpzaBeca actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaBeca
 * @author     Your name here
 */
class alpzaBecaActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaBecas = AlpzaBecaPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaBeca = AlpzaBecaPeer::retrieveByPk($request->getParameter('id_alpza_beca'));
		$this->forward404Unless($this->AlpzaBeca);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaBecaForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaBecaForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaBeca = AlpzaBecaPeer::retrieveByPk($request->getParameter('id_alpza_beca')), sprintf('Object AlpzaBeca does not exist (%s).', $request->getParameter('id_alpza_beca')));
		$this->form = new AlpzaBecaForm($AlpzaBeca);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaBeca = AlpzaBecaPeer::retrieveByPk($request->getParameter('id_alpza_beca')), sprintf('Object AlpzaBeca does not exist (%s).', $request->getParameter('id_alpza_beca')));
		$this->form = new AlpzaBecaForm($AlpzaBeca);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaBeca = AlpzaBecaPeer::retrieveByPk($request->getParameter('id_alpza_beca')), sprintf('Object AlpzaBeca does not exist (%s).', $request->getParameter('id_alpza_beca')));
		$AlpzaBeca->delete();

		$this->redirect('alpzaBeca/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaBeca = $form->save();

			$this->redirect('alpzaBeca/edit?id_alpza_beca='.$AlpzaBeca->getIdAlpzaBeca());
		}
	}
}
