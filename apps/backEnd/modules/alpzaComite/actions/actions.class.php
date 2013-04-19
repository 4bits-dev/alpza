<?php

/**
 * alpzaComite actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaComite
 * @author     Your name here
 */
class alpzaComiteActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaComites = AlpzaComitePeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaComite = AlpzaComitePeer::retrieveByPk($request->getParameter('id_alpza_comite'));
		$this->forward404Unless($this->AlpzaComite);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaComiteForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaComiteForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaComite = AlpzaComitePeer::retrieveByPk($request->getParameter('id_alpza_comite')), sprintf('Object AlpzaComite does not exist (%s).', $request->getParameter('id_alpza_comite')));
		$this->form = new AlpzaComiteForm($AlpzaComite);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaComite = AlpzaComitePeer::retrieveByPk($request->getParameter('id_alpza_comite')), sprintf('Object AlpzaComite does not exist (%s).', $request->getParameter('id_alpza_comite')));
		$this->form = new AlpzaComiteForm($AlpzaComite);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaComite = AlpzaComitePeer::retrieveByPk($request->getParameter('id_alpza_comite')), sprintf('Object AlpzaComite does not exist (%s).', $request->getParameter('id_alpza_comite')));
		$AlpzaComite->delete();

		$this->redirect('alpzaComite/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaComite = $form->save();

			$this->redirect('alpzaComite/edit?id_alpza_comite='.$AlpzaComite->getIdAlpzaComite());
		}
	}
}
