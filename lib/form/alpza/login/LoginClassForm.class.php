<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author haxsystem
 */
class LoginClassForm extends BaseForm {

	public function configure() {

		$this->setWidgets(
		array(
                    'username' => new sfWidgetFormInput(),
                    'password' => new sfWidgetFormInput(array('type' => 'password')),
                    'remember' => new sfWidgetFormInputHidden(array(),array('value'=>true)),
		)
		);

		$this->widgetSchema->setLabels(
		array(
                    'username' => 'Usuario',
                    'password' => 'Contraseña',
		)
		);

		$this->setValidators(array(
            'username' => new sfValidatorString(array('required' => true)),
            'password' => new sfValidatorString(array('required' => true)),
		));

		$this->validatorSchema->setPostValidator(new sfGuardValidatorUser());
		$this->widgetSchema->setNameFormat('signin[%s]');
	}

}

?>
