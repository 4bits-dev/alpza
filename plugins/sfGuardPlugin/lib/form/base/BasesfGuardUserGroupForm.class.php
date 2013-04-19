<?php

/**
 * sfGuardUserGroup form base class.
 *
 * @method sfGuardUserGroup getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfGuardUserGroupForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'user_id'  => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser','add_empty' => false)),
      'group_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardGroup','add_empty' => false)),
		));

		$this->widgetSchema->setLabels(array(
      'user_id' => 'Usuario',
      'group_id' => 'Grupo',
		));

		$this->setValidators(array(
      'user_id'  => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id', 'required' => true)),
      'group_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardGroup', 'column' => 'id', 'required' => true)),
		));

		$this->widgetSchema->setNameFormat('sf_guard_user_group[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'sfGuardUserGroup';
	}


}
