<?php

/**
 * AlpzaBanner filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaBannerFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_banner_tipo' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaBannerTipo', 'add_empty' => true)),
      'path_contenido'       => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(),
      'fecha_ingreso'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'estado'               => new sfWidgetFormFilterInput(),
      'url_tracking'         => new sfWidgetFormFilterInput(),
      'url_destino'          => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'id_alpza_banner_tipo' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaBannerTipo', 'column' => 'id_alpza_banner_tipo')),
      'path_contenido'       => new sfValidatorPass(array('required' => false)),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'fecha_ingreso'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'estado'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'url_tracking'         => new sfValidatorPass(array('required' => false)),
      'url_destino'          => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_banner_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaBanner';
	}

	public function getFields()
	{
		return array(
      'id_alpza_banner'      => 'Number',
      'id_alpza_banner_tipo' => 'ForeignKey',
      'path_contenido'       => 'Text',
      'nombre'               => 'Text',
      'fecha_ingreso'        => 'Date',
      'fecha_edicion'        => 'Date',
      'estado'               => 'Number',
      'url_tracking'         => 'Text',
      'url_destino'          => 'Text',
		);
	}
}
