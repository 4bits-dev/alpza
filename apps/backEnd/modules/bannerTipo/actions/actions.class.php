<?php

/**
 * bannerTipo actions.
 *
 * @package    alpzaDev
 * @subpackage bannerTipo
 * @author     Your name here
 */
class bannerTipoActions extends sfActions {

	public function executeIndex(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->AlpzaBannerTipos = AlpzaBannerTipoPeer::doSelect(new Criteria());
	}

	public function executeShow(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->AlpzaBannerTipo = AlpzaBannerTipoPeer::retrieveByPk($request->getParameter('id_alpza_banner_tipo'));
		$this->forward404Unless($this->AlpzaBannerTipo);
	}

	public function executeNew(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->form = new AlpzaBannerTipoForm();
	}

	public function executeCreate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new AlpzaBannerTipoForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($AlpzaBannerTipo = AlpzaBannerTipoPeer::retrieveByPk($request->getParameter('id_alpza_banner_tipo')), sprintf('Object AlpzaBannerTipo does not exist (%s).', $request->getParameter('id_alpza_banner_tipo')));
		$this->form = new AlpzaBannerTipoForm($AlpzaBannerTipo);
	}

	public function executeUpdate(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($AlpzaBannerTipo = AlpzaBannerTipoPeer::retrieveByPk($request->getParameter('id_alpza_banner_tipo')), sprintf('Object AlpzaBannerTipo does not exist (%s).', $request->getParameter('id_alpza_banner_tipo')));
		$this->form = new AlpzaBannerTipoForm($AlpzaBannerTipo);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request) {
		$this->setLayout('layoutBootStrap');
		$request->checkCSRFProtection();

		$this->forward404Unless($AlpzaBannerTipo = AlpzaBannerTipoPeer::retrieveByPk($request->getParameter('id_alpza_banner_tipo')), sprintf('Object AlpzaBannerTipo does not exist (%s).', $request->getParameter('id_alpza_banner_tipo')));
		$AlpzaBannerTipo->delete();

		$this->redirect('bannerTipo/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form) {
		$this->setLayout('layoutBootStrap');
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$AlpzaBannerTipo = $form->save();

			$this->redirect('bannerTipo/edit?id_alpza_banner_tipo=' . $AlpzaBannerTipo->getIdAlpzaBannerTipo());
		}
	}

}
