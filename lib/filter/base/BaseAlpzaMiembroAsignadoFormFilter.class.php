<?php

/**
 * AlpzaMiembroAsignado filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroAsignadoFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_sf_guard_user' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
		));

		$this->setValidators(array(
      'id_sf_guard_user' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_asignado_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroAsignado';
	}

	public function getFields()
	{
		return array(
      'id_sf_guard_user' => 'ForeignKey',
      'id_alpza_miembro' => 'ForeignKey',
      'id'               => 'Number',
		);
	}
}
