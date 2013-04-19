<?php
class sistemaComponents extends sfComponents {

	public function executeHead(){

	}

	public function executeMenu(){
		$this->user = $this->getUser();
	}

	public function executeFooter(){

	}

}
?>