<?php
class alpzaMiembroInfo{

	public static function getMiembroName($idMiembro){
		$criteria=new Criteria();
		$criteria->add(AlpzaMiembroPeer::ID_ALPZA_MIEMBRO, $idMiembro);
		$miembro=AlpzaMiembroPeer::doSelectOne($criteria);
		if(count($miembro)>0){
			return $miembro->getNombre();
		}else
		return null;
	}
}
?>