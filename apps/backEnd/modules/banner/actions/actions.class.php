<?php

/**
 * banner actions.
 *
 * @package    alpzaDev
 * @subpackage banner
 * @author     Your name here
 */
class bannerActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->AlpzaBanners = AlpzaBannerPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request) {
		$this->AlpzaBanner = AlpzaBannerPeer::retrieveByPk($request->getParameter('id_alpza_banner'));
		$this->forward404Unless($this->AlpzaBanner);
	}

	public function executeNew(sfWebRequest $request) {
		$this->form = new AlpzaBannerForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaBannerForm();
		$page = new page();
		$this->errorFoto = false;
		$httpData = $request->getParameter('alpza_banner');
		if ($page->getValidSlider($httpData['id_alpza_banner_tipo'])) {
			$this->processForm($request, $this->form);
		} else {
			$this->errorFoto = true;
		}

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->forward404Unless($AlpzaBanner = AlpzaBannerPeer::retrieveByPk($request->getParameter('id_alpza_banner')), sprintf('Object AlpzaBanner does not exist (%s).', $request->getParameter('id_alpza_banner')));
		$this->form = new AlpzaBannerForm($AlpzaBanner);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaBanner = AlpzaBannerPeer::retrieveByPk($request->getParameter('id_alpza_banner')), sprintf('Object AlpzaBanner does not exist (%s).', $request->getParameter('id_alpza_banner')));
		$this->form = new AlpzaBannerForm($AlpzaBanner);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaBanner = AlpzaBannerPeer::retrieveByPk($request->getParameter('id_alpza_banner')), sprintf('Object AlpzaBanner does not exist (%s).', $request->getParameter('id_alpza_banner')));
		$AlpzaBanner->delete();

		$this->redirect('banner/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) { // procesa y guarda un form
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$AlpzaBanner = $form->save();
			$this->redirect('banner/edit?id_alpza_banner=' . $AlpzaBanner->getIdAlpzaBanner());
		}
	}

}
