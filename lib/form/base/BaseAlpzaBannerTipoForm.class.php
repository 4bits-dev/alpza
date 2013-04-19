<?php

/**
 * AlpzaBannerTipo form base class.
 *
 * @method AlpzaBannerTipo getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaBannerTipoForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_banner_tipo' => new sfWidgetFormInputHidden(),
      'nombre'               => new sfWidgetFormInputText(),
		));

		$this->setValidators(array(
      'id_alpza_banner_tipo' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaBannerTipo()), 'empty_value' => $this->getObject()->getIdAlpzaBannerTipo(), 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_banner_tipo[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaBannerTipo';
	}


}
