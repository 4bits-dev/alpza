<?php

/**
 * AlpzaMiembroFinanzas filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroFinanzasFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'          => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'cuenta'                    => new sfWidgetFormFilterInput(),
      'institucion'               => new sfWidgetFormFilterInput(),
      'direccion'                 => new sfWidgetFormFilterInput(),
      'email'                     => new sfWidgetFormFilterInput(),
      'duracion'                  => new sfWidgetFormFilterInput(),
      'fecha_ingreso'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'id_alpza_miembro'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'cuenta'                    => new sfValidatorPass(array('required' => false)),
      'institucion'               => new sfValidatorPass(array('required' => false)),
      'direccion'                 => new sfValidatorPass(array('required' => false)),
      'email'                     => new sfValidatorPass(array('required' => false)),
      'duracion'                  => new sfValidatorPass(array('required' => false)),
      'fecha_ingreso'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_finanzas_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroFinanzas';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_finanzas' => 'Number',
      'id_alpza_miembro'          => 'ForeignKey',
      'cuenta'                    => 'Text',
      'institucion'               => 'Text',
      'direccion'                 => 'Text',
      'email'                     => 'Text',
      'duracion'                  => 'Text',
      'fecha_ingreso'             => 'Date',
      'fecha_edicion'             => 'Date',
      'fecha_publicacion'         => 'Date',
		);
	}
}
