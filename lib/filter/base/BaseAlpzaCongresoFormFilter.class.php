<?php

/**
 * AlpzaCongreso filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaCongresoFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'  => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre'            => new sfWidgetFormFilterInput(),
      'extracto'          => new sfWidgetFormFilterInput(),
      'congreso'          => new sfWidgetFormFilterInput(),
      'estado'            => new sfWidgetFormFilterInput(),
      'fecha_ingreso'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'id_alpza_miembro'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'extracto'          => new sfValidatorPass(array('required' => false)),
      'congreso'          => new sfValidatorPass(array('required' => false)),
      'estado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_congreso_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaCongreso';
	}

	public function getFields()
	{
		return array(
      'id_alpza_congreso' => 'Number',
      'id_alpza_miembro'  => 'ForeignKey',
      'nombre'            => 'Text',
      'extracto'          => 'Text',
      'congreso'          => 'Text',
      'estado'            => 'Number',
      'fecha_ingreso'     => 'Date',
      'fecha_edicion'     => 'Date',
      'fecha_publicacion' => 'Date',
		);
	}
}
