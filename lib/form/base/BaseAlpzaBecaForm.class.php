<?php

/**
 * AlpzaBeca form base class.
 *
 * @method AlpzaBeca getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaBecaForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_beca'                  => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre'                         => new sfWidgetFormInputText(),
      'extracto'                       => new sfWidgetFormInputText(),
      'beca'                           => new sfWidgetFormTextareaTinyMCE(),
      'estado'                         => new sfWidgetFormInputCheckbox(),
      'fecha_ingreso'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_edicion'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_publicacion'              => new sfWidgetFormDate(array(), array('class' => 'span3')),
		));

		$this->widgetSchema->setLabels(array(
      'alpza_miembro_id_alpza_miembro' => 'Membrecía',
      'fecha_edicion' => 'Fecha de Edición',
      'fecha_publicacion' => 'Fecha de Publicación',
		));

		$this->setValidators(array(
      'id_alpza_beca'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaBeca()), 'empty_value' => $this->getObject()->getIdAlpzaBeca(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'extracto'                       => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'beca'                           => new sfValidatorString(array('required' => false)),
      'estado'                         => new sfValidatorBoolean(),
      'fecha_ingreso'                  => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'                  => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'              => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_beca[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaBeca';
	}


}
