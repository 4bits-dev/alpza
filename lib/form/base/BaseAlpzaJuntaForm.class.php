<?php

/**
 * AlpzaJunta form base class.
 *
 * @method AlpzaJunta getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaJuntaForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_junta'     => new sfWidgetFormInputHidden(),
      'id_alpza_miembro'   => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre'             => new sfWidgetFormInputHidden(),
      'presidente'         => new sfWidgetFormInputText(),
      'vicepresidente'     => new sfWidgetFormInputText(),
      'secretario'         => new sfWidgetFormInputText(),
      'tesorero'           => new sfWidgetFormInputText(),
      'fiscal'             => new sfWidgetFormInputText(),
      'director_ejecutivo' => new sfWidgetFormInputText(),
      'estado'             => new sfWidgetFormInputHidden(),
      'fecha_ingreso'      => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_edicion'      => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_publicacion'  => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
		));

		$this->widgetSchema->setLabels(array(
      'id_alpza_miembro' => 'Junta de',
      'presidente' => 'Presidente',
      'vicepresidente' => 'Vicepresidente',
      'secretario' => 'Secretario',
      'tesorero' => 'Tesorero',
      'fiscal' => 'Fiscal',
      'director_ejecutivo' => 'Director Ejecutivo',
      'fecha_edicion' => 'Fecha de Edición',
		));

		$this->setValidators(array(
      'id_alpza_junta'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaJunta()), 'empty_value' => $this->getObject()->getIdAlpzaJunta(), 'required' => false)),
      'id_alpza_miembro'   => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'presidente'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'vicepresidente'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'secretario'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tesorero'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fiscal'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'director_ejecutivo' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'estado'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha_ingreso'      => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'      => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'  => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_junta[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaJunta';
	}


}
