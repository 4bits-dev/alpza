<?php

/**
 * AlpzaMiembro form base class.
 *
 * @method AlpzaMiembro getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'      => new sfWidgetFormInputHidden(),
      'nombre'                => new sfWidgetFormInputText(),
      'estado'                => new sfWidgetFormInputCheckBox(),
      'fecha_ingreso'         => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_edicion'         => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_publicacion'     => new sfWidgetFormDate(array(), array('class' => 'span3')),
		));

		$this->widgetSchema->setLabels(array(
      'fecha_publicacion' => 'Fecha de Publicación',
		));

		$this->setValidators(array(
      'id_alpza_miembro'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembro()), 'empty_value' => $this->getObject()->getIdAlpzaMiembro(), 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 45)),
      'estado'                => new sfValidatorBoolean(),
      'fecha_ingreso'         => new sfValidatorDate(),
      'fecha_edicion'         => new sfValidatorDate(),
      'fecha_publicacion'     => new sfValidatorDate(),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembro';
	}


}
