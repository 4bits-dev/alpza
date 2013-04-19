<?php

/**
 * AlpzaMiembroRegional filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroRegionalFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre_formal'                  => new sfWidgetFormFilterInput(),
      'sigla'                          => new sfWidgetFormFilterInput(),
      'director_nombre'                => new sfWidgetFormFilterInput(),
      'director_email'                 => new sfWidgetFormFilterInput(),
      'numero_identificacion'          => new sfWidgetFormFilterInput(),
      'ano_fundacion'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ano_ingreso_alpza'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'delegado_nombre'                => new sfWidgetFormFilterInput(),
      'delegado_apellido'              => new sfWidgetFormFilterInput(),
      'delegado_profesion'             => new sfWidgetFormFilterInput(),
      'delegado_cargo'                 => new sfWidgetFormFilterInput(),
      'delegado_email'                 => new sfWidgetFormFilterInput(),
      'logo'                           => new sfWidgetFormFilterInput(),
      'direccion'                      => new sfWidgetFormFilterInput(),
      'telefono_cod_ciudad'            => new sfWidgetFormFilterInput(),
      'telefono_cod_pais'              => new sfWidgetFormFilterInput(),
      'telefono'                       => new sfWidgetFormFilterInput(),
      'fax'                            => new sfWidgetFormFilterInput(),
      'celular'                        => new sfWidgetFormFilterInput(),
      'email'                          => new sfWidgetFormFilterInput(),
      'sitio_web'                      => new sfWidgetFormFilterInput(),
      'mision'                         => new sfWidgetFormFilterInput(),
      'vision'                         => new sfWidgetFormFilterInput(),
      'descripcion'                    => new sfWidgetFormFilterInput(),
      'objetivo'                       => new sfWidgetFormFilterInput(),
      'proyectos'                      => new sfWidgetFormFilterInput(),
      'pais'                           => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorPass(array('required' => false)),
      'sigla'                          => new sfValidatorPass(array('required' => false)),
      'director_nombre'                => new sfValidatorPass(array('required' => false)),
      'director_email'                 => new sfValidatorPass(array('required' => false)),
      'numero_identificacion'          => new sfValidatorPass(array('required' => false)),
      'ano_fundacion'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'ano_ingreso_alpza'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'delegado_nombre'                => new sfValidatorPass(array('required' => false)),
      'delegado_apellido'              => new sfValidatorPass(array('required' => false)),
      'delegado_profesion'             => new sfValidatorPass(array('required' => false)),
      'delegado_cargo'                 => new sfValidatorPass(array('required' => false)),
      'delegado_email'                 => new sfValidatorPass(array('required' => false)),
      'logo'                           => new sfValidatorPass(array('required' => false)),
      'direccion'                      => new sfValidatorPass(array('required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorPass(array('required' => false)),
      'telefono_cod_pais'              => new sfValidatorPass(array('required' => false)),
      'telefono'                       => new sfValidatorPass(array('required' => false)),
      'fax'                            => new sfValidatorPass(array('required' => false)),
      'celular'                        => new sfValidatorPass(array('required' => false)),
      'email'                          => new sfValidatorPass(array('required' => false)),
      'sitio_web'                      => new sfValidatorPass(array('required' => false)),
      'mision'                         => new sfValidatorPass(array('required' => false)),
      'vision'                         => new sfValidatorPass(array('required' => false)),
      'descripcion'                    => new sfValidatorPass(array('required' => false)),
      'objetivo'                       => new sfValidatorPass(array('required' => false)),
      'proyectos'                      => new sfValidatorPass(array('required' => false)),
      'pais'                           => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_regional_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroRegional';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_regional'      => 'Number',
      'alpza_miembro_id_alpza_miembro' => 'ForeignKey',
      'nombre_formal'                  => 'Text',
      'sigla'                          => 'Text',
      'director_nombre'                => 'Text',
      'director_email'                 => 'Text',
      'numero_identificacion'          => 'Text',
      'ano_fundacion'                  => 'Date',
      'ano_ingreso_alpza'              => 'Date',
      'delegado_nombre'                => 'Text',
      'delegado_apellido'              => 'Text',
      'delegado_profesion'             => 'Text',
      'delegado_cargo'                 => 'Text',
      'delegado_email'                 => 'Text',
      'logo'                           => 'Text',
      'direccion'                      => 'Text',
      'telefono_cod_ciudad'            => 'Text',
      'telefono_cod_pais'              => 'Text',
      'telefono'                       => 'Text',
      'fax'                            => 'Text',
      'celular'                        => 'Text',
      'email'                          => 'Text',
      'sitio_web'                      => 'Text',
      'mision'                         => 'Text',
      'vision'                         => 'Text',
      'descripcion'                    => 'Text',
      'objetivo'                       => 'Text',
      'proyectos'                      => 'Text',
      'pais'                           => 'Text',
		);
	}
}
