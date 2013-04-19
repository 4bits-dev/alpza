<?php

/**
 * AlpzaJunta filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaJuntaFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'   => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre'             => new sfWidgetFormFilterInput(),
      'presidente'         => new sfWidgetFormFilterInput(),
      'vicepresidente'     => new sfWidgetFormFilterInput(),
      'secretario'         => new sfWidgetFormFilterInput(),
      'tesorero'           => new sfWidgetFormFilterInput(),
      'fiscal'             => new sfWidgetFormFilterInput(),
      'director_ejecutivo' => new sfWidgetFormFilterInput(),
      'estado'             => new sfWidgetFormFilterInput(),
      'fecha_ingreso'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'id_alpza_miembro'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'presidente'         => new sfValidatorPass(array('required' => false)),
      'vicepresidente'     => new sfValidatorPass(array('required' => false)),
      'secretario'         => new sfValidatorPass(array('required' => false)),
      'tesorero'           => new sfValidatorPass(array('required' => false)),
      'fiscal'             => new sfValidatorPass(array('required' => false)),
      'director_ejecutivo' => new sfValidatorPass(array('required' => false)),
      'estado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_junta_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaJunta';
	}

	public function getFields()
	{
		return array(
      'id_alpza_junta'     => 'Number',
      'id_alpza_miembro'   => 'ForeignKey',
      'nombre'             => 'Text',
      'presidente'         => 'Text',
      'vicepresidente'     => 'Text',
      'secretario'         => 'Text',
      'tesorero'           => 'Text',
      'fiscal'             => 'Text',
      'director_ejecutivo' => 'Text',
      'estado'             => 'Number',
      'fecha_ingreso'      => 'Date',
      'fecha_edicion'      => 'Date',
      'fecha_publicacion'  => 'Date',
		);
	}
}
