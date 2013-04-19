<?php

/**
 * AlpzaMiembro filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_tipo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_ingreso'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_edicion'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_publicacion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
		));

		$this->setValidators(array(
      'id_alpza_miembro_tipo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'                => new sfValidatorPass(array('required' => false)),
      'estado'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembro';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro'      => 'Number',
      'id_alpza_miembro_tipo' => 'Number',
      'nombre'                => 'Text',
      'estado'                => 'Number',
      'fecha_ingreso'         => 'Date',
      'fecha_edicion'         => 'Date',
      'fecha_publicacion'     => 'Date',
		);
	}
}
