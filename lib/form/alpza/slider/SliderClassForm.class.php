<?php
class SliderClassForm extends BaseForm {
	public function configure() {
		$this->setWidgets(
		array(
                    'username' => new sfWidgetFormInput(),
                    'password' => new sfWidgetFormInput(array('type' => 'password')),
                    'remember' => new sfWidgetFormInputCheckbox(),
		)
		);
	}
}