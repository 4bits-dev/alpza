<?php

/**
 * AlpzaPublicacionTipo filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaPublicacionTipoFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'nombre'                    => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'nombre'                    => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_publicacion_tipo_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaPublicacionTipo';
	}

	public function getFields()
	{
		return array(
      'id_alpza_publicacion_tipo' => 'Number',
      'nombre'                    => 'Text',
		);
	}
}
