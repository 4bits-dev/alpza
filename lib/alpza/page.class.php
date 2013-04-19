<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author gabrielgallardo
 */

class page {

	// metodo para controlar el slider central
	public function getSlidercentral()
	{
		$criteria = new Criteria();
		$criteria->add(AlpzaBannerPeer::ESTADO,1); // agregar una regla
		$criteria->add(AlpzaBannerTipoPeer::NOMBRE,'Slider Central'); // filtrar solo imagenes de tipo Slider Central
		$imagesObject = AlpzaBannerPeer::doSelect($criteria);
		$imagesArray = array();

		if(count($imagesObject) > 0 && count($imagesObject) < 8){
			foreach($imagesObject as $index => $data){
				$imagesArray[$index]['nombre'] = $data->getNombre();
				$imagesArray[$index]['imagen'] = $data->getPathContenido();
				$imagesArray[$index]['url'] = $data->getUrlDestino();
				$imagesArray[$index]['traking'] = $data->getUrlTracking();
			}
		}

		return $imagesArray;
	}

	// metodo para validar que la cantidad de imagenes activas para el slider central no sea mayor a 7
	public function getValidSlider($tipo)
	{
		$criteria = new Criteria();
		$criteria->add(AlpzaBannerPeer::ESTADO,1);
		$criteria->add(AlpzaBannerTipoPeer::ID_ALPZA_BANNER_TIPO,$tipo);
		$imagesObject = AlpzaBannerPeer::doSelect($criteria);
		if(count($imagesObject) < 7){
			return true;
		}else{
			return false;
		}
	}

	// metodo para obtener datos a partir de la id de una tablas
	public static function getBannerNombreTipo($tipo){
		$criteria = new Criteria();
		$criteria->add(AlpzaBannerTipoPeer::ID_ALPZA_BANNER_TIPO,$tipo);
		$tipoBanner = AlpzaBannerTipoPeer::doSelectOne($criteria);
		$nombretipo = $tipoBanner->getNombre();
		if(count($tipoBanner)>0)
		return $nombretipo;
		else
		return 'Tipo Indefinido';
	}

	public function getNoticia($name){
		$criteria = new Criteria();
		$criteria->add(AlpzaNoticiaPeer::NOMBRE,$name);
		$noticia=AlpzaNoticiaPeer::doSelectOne($criteria);
		$setNotiacia=array();
		if(count($noticia)>0){
			$setNoticia['nombre']=$noticia->getNombre();
			$setNoticia['extracto']=$noticia->getExtracto();
			$setNoticia['contenido']=$noticia->getNoticia();
		}
		return $setNoticia;
	}

	public static function getJunta(){
		$junta=AlpzaJuntaPeer::doSelect(new Criteria());
		$infoJunta=array('head'=>array('Presidente','VicePrecidente','Secretario','Tesorero','Fiscal','Director Ejecutivo'));
		if(count($junta)>0){
			$infoJunta['body'][0][0]=$junta[0]->getPresidente();
			$infoJunta['body'][0][1]=$junta[0]->getVicepresidente();
			$infoJunta['body'][0][2]=$junta[0]->getSecretario();
			$infoJunta['body'][0][3]=$junta[0]->getTesorero();
			$infoJunta['body'][0][4]=$junta[0]->getFiscal();
			$infoJunta['body'][0][5]=$junta[0]->getDirectorEjecutivo();
		}
		return $infoJunta;
	}

	public static function getAlpza(){
		$alpza=AlpzaInformacionPeer::doSelect(new Criteria());
		$infoAlpza=array();
		if(count($alpza)){
			$infoAlpza['mision']=$alpza[0]->getMision();
			$infoAlpza['vision']=$alpza[0]->getVision();
			$infoAlpza['aliados']=$alpza[0]->getAliado();
			$infoAlpza['boletin']=$alpza[0]->getBoletin();
			$infoAlpza['twitter']=$alpza[0]->getTwitter();
			$infoAlpza['facebook']=$alpza[0]->getFacebook();
			$infoAlpza['email']=$alpza[0]->getEmail();
			$infoAlpza['descripcion']=$alpza[0]->getDescripcion();
			$infoAlpza['telefono']=$alpza[0]->getTelefono();
			$infoAlpza['direccion']=$alpza[0]->getDireccion();
			$infoAlpza['fax']=$alpza[0]->getFax();
		}
		return $infoAlpza;
	}

	public static function getComiteLista(){
		$alpza=AlpzaComitePeer::doSelect(new Criteria());
		$infoAlpza=array('head'=>array('Miembro','Nombre Comité'));
		if(count($alpza)>0){
			foreach($alpza as $index=>$data){
				$infoAlpza['body'][$index][0]=alpzaMiembroInfo::getMiembroName($data->getIdAlpzaMiembro());
				$infoAlpza['body'][$index][1]=array('tipo'=>'link','nombre'=>$data->getNombre(),'url'=>'comite/'.$data->getIdAlpzaComite().'/'.$data->getNombre());
			}
		}
		return $infoAlpza;
	}

	public static function getComite($idComite){
		$criteria=new Criteria();
		$criteria->add(AlpzaComitePeer::ID_ALPZA_COMITE, $idComite);
		$criteria->add(AlpzaComitePeer::ESTADO, 1);
		$alpza= AlpzaComitePeer::doSelectOne($criteria);
		$infoAlpza=array();
		if(count($alpza)>0){
			$infoAlpza['nombre']=$alpza->getNombre();
			$infoAlpza['mision']=$alpza->getMision();
			$infoAlpza['vision']=$alpza->getVision();
			$infoAlpza['objetivo']=$alpza->getObjetivo();
			$infoAlpza['informacion']=$alpza->getInformacion();
			$infoAlpza['email']=$alpza->getEmail();
			$infoAlpza['coordinador']=$alpza->getCoordinador();
			$infoAlpza['emailCoordinador']=$alpza->getEmailCoordinador();
		}
		return $infoAlpza;
	}
}

?>