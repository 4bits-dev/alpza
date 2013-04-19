<?php

/**
 * miembroInformacionColeccion actions.
 *
 * @package    alpzaDev
 * @subpackage miembroInformacionColeccion
 * @author     Your name here
 */
class miembroInformacionColeccionActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroColeccions = AlpzaMiembroColeccionPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroColeccion = AlpzaMiembroColeccionPeer::retrieveByPk($request->getParameter('id_alpza_miembro_coleccion'));
		$this->forward404Unless($this->AlpzaMiembroColeccion);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroColeccionForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroColeccionForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroColeccion = AlpzaMiembroColeccionPeer::retrieveByPk($request->getParameter('id_alpza_miembro_coleccion')), sprintf('Object AlpzaMiembroColeccion does not exist (%s).', $request->getParameter('id_alpza_miembro_coleccion')));
		$this->form = new AlpzaMiembroColeccionForm($AlpzaMiembroColeccion);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroColeccion = AlpzaMiembroColeccionPeer::retrieveByPk($request->getParameter('id_alpza_miembro_coleccion')), sprintf('Object AlpzaMiembroColeccion does not exist (%s).', $request->getParameter('id_alpza_miembro_coleccion')));
		$this->form = new AlpzaMiembroColeccionForm($AlpzaMiembroColeccion);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroColeccion = AlpzaMiembroColeccionPeer::retrieveByPk($request->getParameter('id_alpza_miembro_coleccion')), sprintf('Object AlpzaMiembroColeccion does not exist (%s).', $request->getParameter('id_alpza_miembro_coleccion')));
		$AlpzaMiembroColeccion->delete();

		$this->redirect('miembroInformacionColeccion/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroColeccion = $form->save();

			$this->redirect('miembroInformacionColeccion/edit?id_alpza_miembro_coleccion='.$AlpzaMiembroColeccion->getIdAlpzaMiembroColeccion());
		}
	}
}
