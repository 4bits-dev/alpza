<?php

/**
 * AlpzaInformacion filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaInformacionFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'mision'                         => new sfWidgetFormFilterInput(),
      'vision'                         => new sfWidgetFormFilterInput(),
      'aliado'                         => new sfWidgetFormFilterInput(),
      'boletin'                        => new sfWidgetFormFilterInput(),
      'twitter'                        => new sfWidgetFormFilterInput(),
      'facebook'                       => new sfWidgetFormFilterInput(),
      'rss'                            => new sfWidgetFormFilterInput(),
      'email'                          => new sfWidgetFormFilterInput(),
      'descripcion'                    => new sfWidgetFormFilterInput(),
      'telefono'                       => new sfWidgetFormFilterInput(),
      'direccion'                      => new sfWidgetFormFilterInput(),
      'fax'                            => new sfWidgetFormFilterInput(),
      'estado'                         => new sfWidgetFormFilterInput(),
      'fecha_ingreso'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_edicion'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_publicacion'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
		));

		$this->setValidators(array(
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'mision'                         => new sfValidatorPass(array('required' => false)),
      'vision'                         => new sfValidatorPass(array('required' => false)),
      'aliado'                         => new sfValidatorPass(array('required' => false)),
      'boletin'                        => new sfValidatorPass(array('required' => false)),
      'twitter'                        => new sfValidatorPass(array('required' => false)),
      'facebook'                       => new sfValidatorPass(array('required' => false)),
      'rss'                            => new sfValidatorPass(array('required' => false)),
      'email'                          => new sfValidatorPass(array('required' => false)),
      'descripcion'                    => new sfValidatorPass(array('required' => false)),
      'telefono'                       => new sfValidatorPass(array('required' => false)),
      'direccion'                      => new sfValidatorPass(array('required' => false)),
      'fax'                            => new sfValidatorPass(array('required' => false)),
      'estado'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ingreso'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_edicion'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_publicacion'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
		));

		$this->widgetSchema->setNameFormat('alpza_informacion_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaInformacion';
	}

	public function getFields()
	{
		return array(
      'id_alpza_informacion'           => 'Number',
      'alpza_miembro_id_alpza_miembro' => 'ForeignKey',
      'mision'                         => 'Text',
      'vision'                         => 'Text',
      'aliado'                         => 'Text',
      'boletin'                        => 'Text',
      'twitter'                        => 'Text',
      'facebook'                       => 'Text',
      'rss'                            => 'Text',
      'email'                          => 'Text',
      'descripcion'                    => 'Text',
      'telefono'                       => 'Text',
      'direccion'                      => 'Text',
      'fax'                            => 'Text',
      'estado'                         => 'Number',
      'fecha_ingreso'                  => 'Date',
      'fecha_edicion'                  => 'Date',
      'fecha_publicacion'              => 'Date',
		);
	}
}
