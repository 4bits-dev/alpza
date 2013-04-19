<?php

/**
 * AlpzaMiembroAsignado form base class.
 *
 * @method AlpzaMiembroAsignado getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroAsignadoForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_sf_guard_user' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'id'               => new sfWidgetFormInputHidden(),
		));

		$this->widgetSchema->setLabels(array(
      'id_sf_guard_user' => 'Usuario',
      'id_alpza_miembro' => 'Membrecía',
		));

		$this->setValidators(array(
      'id_sf_guard_user' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_asignado[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroAsignado';
	}


}
