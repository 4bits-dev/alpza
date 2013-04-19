<?php

/**
 * AlpzaBannerTipo filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaBannerTipoFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'nombre'               => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'nombre'               => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_banner_tipo_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaBannerTipo';
	}

	public function getFields()
	{
		return array(
      'id_alpza_banner_tipo' => 'Number',
      'nombre'               => 'Text',
		);
	}
}
