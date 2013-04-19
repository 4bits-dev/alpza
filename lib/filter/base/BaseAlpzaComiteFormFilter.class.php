<?php

/**
 * AlpzaComite filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaComiteFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'  => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre'            => new sfWidgetFormFilterInput(),
      'mision'            => new sfWidgetFormFilterInput(),
      'vision'            => new sfWidgetFormFilterInput(),
      'objetivo'          => new sfWidgetFormFilterInput(),
      'informacion'       => new sfWidgetFormFilterInput(),
      'email'             => new sfWidgetFormFilterInput(),
      'coordinador'       => new sfWidgetFormFilterInput(),
      'email_coordinador' => new sfWidgetFormFilterInput(),
      'estado'            => new sfWidgetFormFilterInput(),
      'fecha_ingreso'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'id_alpza_miembro'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'mision'            => new sfValidatorPass(array('required' => false)),
      'vision'            => new sfValidatorPass(array('required' => false)),
      'objetivo'          => new sfValidatorPass(array('required' => false)),
      'informacion'       => new sfValidatorPass(array('required' => false)),
      'email'             => new sfValidatorPass(array('required' => false)),
      'coordinador'       => new sfValidatorPass(array('required' => false)),
      'email_coordinador' => new sfValidatorPass(array('required' => false)),
      'estado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_comite_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaComite';
	}

	public function getFields()
	{
		return array(
      'id_alpza_comite'   => 'Number',
      'id_alpza_miembro'  => 'ForeignKey',
      'nombre'            => 'Text',
      'mision'            => 'Text',
      'vision'            => 'Text',
      'objetivo'          => 'Text',
      'informacion'       => 'Text',
      'email'             => 'Text',
      'coordinador'       => 'Text',
      'email_coordinador' => 'Text',
      'estado'            => 'Number',
      'fecha_ingreso'     => 'Date',
      'fecha_edicion'     => 'Date',
      'fecha_publicacion' => 'Date',
		);
	}
}
