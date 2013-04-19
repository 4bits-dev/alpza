<?php

/**
 * SfGuardProfile filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfGuardProfileFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_sf_guard_user'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'nombre'              => new sfWidgetFormFilterInput(),
      'apellido'            => new sfWidgetFormFilterInput(),
      'email'               => new sfWidgetFormFilterInput(),
      'telefono'            => new sfWidgetFormFilterInput(),
      'celular'             => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_ingreso'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'id_sf_guard_user'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'apellido'            => new sfValidatorPass(array('required' => false)),
      'email'               => new sfValidatorPass(array('required' => false)),
      'telefono'            => new sfValidatorPass(array('required' => false)),
      'celular'             => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_ingreso'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('sf_guard_profile_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'SfGuardProfile';
	}

	public function getFields()
	{
		return array(
      'id_sf_guard_profile' => 'Number',
      'id_sf_guard_user'    => 'ForeignKey',
      'nombre'              => 'Text',
      'apellido'            => 'Text',
      'email'               => 'Text',
      'telefono'            => 'Text',
      'celular'             => 'Text',
      'fecha_nacimiento'    => 'Date',
      'fecha_ingreso'       => 'Date',
      'fecha_edicion'       => 'Date',
		);
	}
}
