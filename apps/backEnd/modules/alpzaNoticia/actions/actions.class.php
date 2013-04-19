<?php

/**
 * alpzaNoticia actions.
 *
 * @package    alpzaDev
 * @subpackage alpzaNoticia
 * @author     Your name here
 */
class alpzaNoticiaActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->AlpzaNoticias = AlpzaNoticiaPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request)
	{
		$this->AlpzaNoticia = AlpzaNoticiaPeer::retrieveByPk($request->getParameter('id_alpza_noticia'));
		$this->forward404Unless($this->AlpzaNoticia);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new AlpzaNoticiaForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaNoticiaForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($AlpzaNoticia = AlpzaNoticiaPeer::retrieveByPk($request->getParameter('id_alpza_noticia')), sprintf('Object AlpzaNoticia does not exist (%s).', $request->getParameter('id_alpza_noticia')));
		$this->form = new AlpzaNoticiaForm($AlpzaNoticia);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaNoticia = AlpzaNoticiaPeer::retrieveByPk($request->getParameter('id_alpza_noticia')), sprintf('Object AlpzaNoticia does not exist (%s).', $request->getParameter('id_alpza_noticia')));
		$this->form = new AlpzaNoticiaForm($AlpzaNoticia);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaNoticia = AlpzaNoticiaPeer::retrieveByPk($request->getParameter('id_alpza_noticia')), sprintf('Object AlpzaNoticia does not exist (%s).', $request->getParameter('id_alpza_noticia')));
		$AlpzaNoticia->delete();

		$this->redirect('alpzaNoticia/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$AlpzaNoticia = $form->save();

			$this->redirect('alpzaNoticia/edit?id_alpza_noticia='.$AlpzaNoticia->getIdAlpzaNoticia());
		}
	}
}
