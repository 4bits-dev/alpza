<?php

/**
 * miembroNacionales actions.
 *
 * @package    alpzaDev
 * @subpackage miembroNacionales
 * @author     Your name here
 */
class miembroNacionalesActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaMiembroNacionaless = AlpzaMiembroNacionalesPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaMiembroNacionales = AlpzaMiembroNacionalesPeer::retrieveByPk($request->getParameter('id_alpza_miembro_nacionales'));
		$this->forward404Unless($this->AlpzaMiembroNacionales);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaMiembroNacionalesForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaMiembroNacionalesForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaMiembroNacionales = AlpzaMiembroNacionalesPeer::retrieveByPk($request->getParameter('id_alpza_miembro_nacionales')), sprintf('Object AlpzaMiembroNacionales does not exist (%s).', $request->getParameter('id_alpza_miembro_nacionales')));
		$this->form = new AlpzaMiembroNacionalesForm($AlpzaMiembroNacionales);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaMiembroNacionales = AlpzaMiembroNacionalesPeer::retrieveByPk($request->getParameter('id_alpza_miembro_nacionales')), sprintf('Object AlpzaMiembroNacionales does not exist (%s).', $request->getParameter('id_alpza_miembro_nacionales')));
		$this->form = new AlpzaMiembroNacionalesForm($AlpzaMiembroNacionales);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaMiembroNacionales = AlpzaMiembroNacionalesPeer::retrieveByPk($request->getParameter('id_alpza_miembro_nacionales')), sprintf('Object AlpzaMiembroNacionales does not exist (%s).', $request->getParameter('id_alpza_miembro_nacionales')));
		$AlpzaMiembroNacionales->delete();

		$this->redirect('miembroNacionales/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaMiembroNacionales = $form->save();

			$this->redirect('miembroNacionales/edit?id_alpza_miembro_nacionales='.$AlpzaMiembroNacionales->getIdAlpzaMiembroNacionales());
		}
	}
}
