<?php

/**
 * AlpzaPublicacion filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaPublicacionFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'id_alpza_publicacion_tipo'      => new sfWidgetFormPropelChoice(array('model' => 'AlpzaPublicacionTipo', 'add_empty' => true)),
      'nombre'                         => new sfWidgetFormFilterInput(),
      'extracto'                       => new sfWidgetFormFilterInput(),
      'proyecto'                       => new sfWidgetFormFilterInput(),
      'estado'                         => new sfWidgetFormFilterInput(),
      'fecha_ingreso'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'id_alpza_publicacion_tipo'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaPublicacionTipo', 'column' => 'id_alpza_publicacion_tipo')),
      'nombre'                         => new sfValidatorPass(array('required' => false)),
      'extracto'                       => new sfValidatorPass(array('required' => false)),
      'proyecto'                       => new sfValidatorPass(array('required' => false)),
      'estado'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_publicacion_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaPublicacion';
	}

	public function getFields()
	{
		return array(
      'id_alpza_publicacion'           => 'Number',
      'alpza_miembro_id_alpza_miembro' => 'ForeignKey',
      'id_alpza_publicacion_tipo'      => 'ForeignKey',
      'nombre'                         => 'Text',
      'extracto'                       => 'Text',
      'proyecto'                       => 'Text',
      'estado'                         => 'Number',
      'fecha_ingreso'                  => 'Date',
      'fecha_edicion'                  => 'Date',
      'fecha_publicacion'              => 'Date',
		);
	}
}
