<?php

/**
 * miembroInformacionFinanciera actions.
 *
 * @package    alpzaDev
 * @subpackage miembroInformacionFinanciera
 * @author     Your name here
 */
class miembroInformacionFinancieraActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroFinanzass = AlpzaMiembroFinanzasPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroFinanzas = AlpzaMiembroFinanzasPeer::retrieveByPk($request->getParameter('id_alpza_miembro_finanzas'));
		$this->forward404Unless($this->AlpzaMiembroFinanzas);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroFinanzasForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroFinanzasForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroFinanzas = AlpzaMiembroFinanzasPeer::retrieveByPk($request->getParameter('id_alpza_miembro_finanzas')), sprintf('Object AlpzaMiembroFinanzas does not exist (%s).', $request->getParameter('id_alpza_miembro_finanzas')));
		$this->form = new AlpzaMiembroFinanzasForm($AlpzaMiembroFinanzas);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroFinanzas = AlpzaMiembroFinanzasPeer::retrieveByPk($request->getParameter('id_alpza_miembro_finanzas')), sprintf('Object AlpzaMiembroFinanzas does not exist (%s).', $request->getParameter('id_alpza_miembro_finanzas')));
		$this->form = new AlpzaMiembroFinanzasForm($AlpzaMiembroFinanzas);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroFinanzas = AlpzaMiembroFinanzasPeer::retrieveByPk($request->getParameter('id_alpza_miembro_finanzas')), sprintf('Object AlpzaMiembroFinanzas does not exist (%s).', $request->getParameter('id_alpza_miembro_finanzas')));
		$AlpzaMiembroFinanzas->delete();

		$this->redirect('miembroInformacionFinanciera/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroFinanzas = $form->save();

			$this->redirect('miembroInformacionFinanciera/edit?id_alpza_miembro_finanzas='.$AlpzaMiembroFinanzas->getIdAlpzaMiembroFinanzas());
		}
	}
}
