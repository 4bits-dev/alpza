<?php
/**
 * Page actions.
 * @package    alpzaDev
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

class pageActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeJunta(){
		$this->contenido=Page::getJunta();
	}

	public function executeAlpza(){
		$contenido=Page::getAlpza();
		$this->contenido=array();
		$this->contenido[0]['titulo']="¿Qué es ALPZA";
		$this->contenido[0]['subtitulo']="";
		$this->contenido[0]['texto']=$contenido['descripcion'];
	}

	public function executeMisionvision(){
		$contenido=Page::getAlpza();
		$this->contenido=array();
		$this->contenido[0]['titulo']="Misión";
		$this->contenido[0]['subtitulo']="";
		$this->contenido[0]['texto']=$contenido['mision'];

		$this->contenido[1]['titulo']="Visión";
		$this->contenido[1]['subtitulo']="";
		$this->contenido[1]['texto']=$contenido['vision'];
	}

	public function executeAliados(){
		$contenido=Page::getAlpza();
		$this->contenido=array();
		$this->contenido[0]['titulo']="Nuestros Aliados";
		$this->contenido[0]['subtitulo']="";
		$this->contenido[0]['texto']=$contenido['aliados'];
	}

	public function executeListacomite(){
		$this->contenido=Page::getComiteLista();
	}

	public function executeComite($http){
		$idComite=$http->getParameter('idComite');
		if(is_numeric($idComite)){
			$contenido=Page::getAlpza();
		}
	}
}
