<?php
class sfGuardInfo{

	public static function getUserName($idUser){
		$criteria=new Criteria();
		$criteria->add(sfGuardUserPeer::ID, $idUser);
		$user=sfGuardUserPeer::doSelectOne($criteria);
		if(count($user)>0){
			return $user->getUsername();
		}else
		return null;
	}

	public static function getGruopName($idGroup){
		$criteria=new Criteria();
		$criteria->add(sfGuardGroupPeer::ID, $idGroup);
		$group=sfGuardGroupPeer::doSelectOne($criteria);
		if(count($group)>0){
			return $group->getName();
		}else
		return null;
	}

	public static function getGruopNameForUser($idUser){
		$criteria=new Criteria();
		$criteria->add(sfGuardUserGroupPeer::USER_ID, $idUser);
		$group=sfGuardUserGroupPeer::doSelectOne($criteria);
		if(count($group)>0){
			return sfGuardInfo::getGruopName($group->getGroupId());
		}else
		return "No definido";
	}
}
?>