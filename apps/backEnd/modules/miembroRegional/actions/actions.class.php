<?php

/**
 * miembroRegional actions.
 *
 * @package    alpzaDev
 * @subpackage miembroRegional
 * @author     Your name here
 */
class miembroRegionalActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroRegionals = AlpzaMiembroRegionalPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroRegional = AlpzaMiembroRegionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_regional'));
		$this->forward404Unless($this->AlpzaMiembroRegional);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroRegionalForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroRegionalForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroRegional = AlpzaMiembroRegionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_regional')), sprintf('Object AlpzaMiembroRegional does not exist (%s).', $request->getParameter('id_alpza_miembro_regional')));
		$this->form = new AlpzaMiembroRegionalForm($AlpzaMiembroRegional);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroRegional = AlpzaMiembroRegionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_regional')), sprintf('Object AlpzaMiembroRegional does not exist (%s).', $request->getParameter('id_alpza_miembro_regional')));
		$this->form = new AlpzaMiembroRegionalForm($AlpzaMiembroRegional);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroRegional = AlpzaMiembroRegionalPeer::retrieveByPk($request->getParameter('id_alpza_miembro_regional')), sprintf('Object AlpzaMiembroRegional does not exist (%s).', $request->getParameter('id_alpza_miembro_regional')));
		$AlpzaMiembroRegional->delete();

		$this->redirect('miembroRegional/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroRegional = $form->save();

			$this->redirect('miembroRegional/edit?id_alpza_miembro_regional='.$AlpzaMiembroRegional->getIdAlpzaMiembroRegional());
		}
	}
}
