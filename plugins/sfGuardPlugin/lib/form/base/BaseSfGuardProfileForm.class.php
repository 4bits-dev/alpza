<?php

/**
 * SfGuardProfile form base class.
 *
 * @method SfGuardProfile getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfGuardProfileForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_sf_guard_profile' => new sfWidgetFormInputHidden(),
      'id_sf_guard_user'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'nombre'              => new sfWidgetFormInputText(),
      'apellido'            => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'telefono'            => new sfWidgetFormInputText(),
      'celular'             => new sfWidgetFormInputText(),
      'fecha_nacimiento'    => new sfWidgetFormDate(array(), array('class' => 'span3')),
      'fecha_ingreso'       => new sfWidgetFormInputHidden(),
      'fecha_edicion'       => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
		));

		$this->widgetSchema->setLabels(array(
      'telefono' => 'Teléfono',
      'fecha_edicion' => 'Fecha de Edición',
		));

		$this->setValidators(array(
      'id_sf_guard_profile' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdSfGuardProfile()), 'empty_value' => $this->getObject()->getIdSfGuardProfile(), 'required' => false)),
      'id_sf_guard_user'    => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'nombre'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'apellido'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'celular'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'    => new sfValidatorDate(array('required' => false)),
      'fecha_ingreso'       => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'       => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('sf_guard_profile[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'SfGuardProfile';
	}


}
