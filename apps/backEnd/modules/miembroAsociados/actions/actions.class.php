<?php

/**
 * miembroAsociados actions.
 *
 * @package    alpzaDev
 * @subpackage miembroAsociados
 * @author     Your name here
 */
class miembroAsociadosActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroAsociadoss = AlpzaMiembroAsociadosPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroAsociados = AlpzaMiembroAsociadosPeer::retrieveByPk($request->getParameter('id_alpza_miembro_asociados'));
		$this->forward404Unless($this->AlpzaMiembroAsociados);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroAsociadosForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroAsociadosForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroAsociados = AlpzaMiembroAsociadosPeer::retrieveByPk($request->getParameter('id_alpza_miembro_asociados')), sprintf('Object AlpzaMiembroAsociados does not exist (%s).', $request->getParameter('id_alpza_miembro_asociados')));
		$this->form = new AlpzaMiembroAsociadosForm($AlpzaMiembroAsociados);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroAsociados = AlpzaMiembroAsociadosPeer::retrieveByPk($request->getParameter('id_alpza_miembro_asociados')), sprintf('Object AlpzaMiembroAsociados does not exist (%s).', $request->getParameter('id_alpza_miembro_asociados')));
		$this->form = new AlpzaMiembroAsociadosForm($AlpzaMiembroAsociados);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroAsociados = AlpzaMiembroAsociadosPeer::retrieveByPk($request->getParameter('id_alpza_miembro_asociados')), sprintf('Object AlpzaMiembroAsociados does not exist (%s).', $request->getParameter('id_alpza_miembro_asociados')));
		$AlpzaMiembroAsociados->delete();

		$this->redirect('miembroAsociados/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroAsociados = $form->save();

			$this->redirect('miembroAsociados/edit?id_alpza_miembro_asociados='.$AlpzaMiembroAsociados->getIdAlpzaMiembroAsociados());
		}
	}
}
