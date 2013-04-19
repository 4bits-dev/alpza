<?php

/**
 * AlpzaPublicacionTipo form base class.
 *
 * @method AlpzaPublicacionTipo getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaPublicacionTipoForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_publicacion_tipo' => new sfWidgetFormInputHidden(),
      'nombre'                    => new sfWidgetFormInputText(),
		));

		$this->setValidators(array(
      'id_alpza_publicacion_tipo' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaPublicacionTipo()), 'empty_value' => $this->getObject()->getIdAlpzaPublicacionTipo(), 'required' => false)),
      'nombre'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_publicacion_tipo[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaPublicacionTipo';
	}


}
