<?php

/**
 * AlpzaMiembroProfesional filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroProfesionalFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre_formal'                  => new sfWidgetFormFilterInput(),
      'sigla'                          => new sfWidgetFormFilterInput(),
      'numero_identificacion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ano_ingreso_alpza'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'nombre'                         => new sfWidgetFormFilterInput(),
      'apellido'                       => new sfWidgetFormFilterInput(),
      'profesion'                      => new sfWidgetFormFilterInput(),
      'trabajo'                        => new sfWidgetFormFilterInput(),
      'cargo'                          => new sfWidgetFormFilterInput(),
      'otra_asociacion'                => new sfWidgetFormFilterInput(),
      'direccion'                      => new sfWidgetFormFilterInput(),
      'codigo_postal'                  => new sfWidgetFormFilterInput(),
      'pais'                           => new sfWidgetFormFilterInput(),
      'telefono_cod_ciudad'            => new sfWidgetFormFilterInput(),
      'telefono_cod_pais'              => new sfWidgetFormFilterInput(),
      'telefono'                       => new sfWidgetFormFilterInput(),
      'celular'                        => new sfWidgetFormFilterInput(),
      'fax'                            => new sfWidgetFormFilterInput(),
      'email'                          => new sfWidgetFormFilterInput(),
      'sitio_web'                      => new sfWidgetFormFilterInput(),
      'intereses_principales'          => new sfWidgetFormFilterInput(),
      'area_tematica_interes'          => new sfWidgetFormFilterInput(),
      'area_experiencia'               => new sfWidgetFormFilterInput(),
      'proyecto'                       => new sfWidgetFormFilterInput(),
      'publicacion'                    => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorPass(array('required' => false)),
      'sigla'                          => new sfValidatorPass(array('required' => false)),
      'numero_identificacion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'ano_ingreso_alpza'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'nombre'                         => new sfValidatorPass(array('required' => false)),
      'apellido'                       => new sfValidatorPass(array('required' => false)),
      'profesion'                      => new sfValidatorPass(array('required' => false)),
      'trabajo'                        => new sfValidatorPass(array('required' => false)),
      'cargo'                          => new sfValidatorPass(array('required' => false)),
      'otra_asociacion'                => new sfValidatorPass(array('required' => false)),
      'direccion'                      => new sfValidatorPass(array('required' => false)),
      'codigo_postal'                  => new sfValidatorPass(array('required' => false)),
      'pais'                           => new sfValidatorPass(array('required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorPass(array('required' => false)),
      'telefono_cod_pais'              => new sfValidatorPass(array('required' => false)),
      'telefono'                       => new sfValidatorPass(array('required' => false)),
      'celular'                        => new sfValidatorPass(array('required' => false)),
      'fax'                            => new sfValidatorPass(array('required' => false)),
      'email'                          => new sfValidatorPass(array('required' => false)),
      'sitio_web'                      => new sfValidatorPass(array('required' => false)),
      'intereses_principales'          => new sfValidatorPass(array('required' => false)),
      'area_tematica_interes'          => new sfValidatorPass(array('required' => false)),
      'area_experiencia'               => new sfValidatorPass(array('required' => false)),
      'proyecto'                       => new sfValidatorPass(array('required' => false)),
      'publicacion'                    => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_profesional_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroProfesional';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_profesional'   => 'Number',
      'alpza_miembro_id_alpza_miembro' => 'ForeignKey',
      'nombre_formal'                  => 'Text',
      'sigla'                          => 'Text',
      'numero_identificacion'          => 'Date',
      'ano_ingreso_alpza'              => 'Date',
      'nombre'                         => 'Text',
      'apellido'                       => 'Text',
      'profesion'                      => 'Text',
      'trabajo'                        => 'Text',
      'cargo'                          => 'Text',
      'otra_asociacion'                => 'Text',
      'direccion'                      => 'Text',
      'codigo_postal'                  => 'Text',
      'pais'                           => 'Text',
      'telefono_cod_ciudad'            => 'Text',
      'telefono_cod_pais'              => 'Text',
      'telefono'                       => 'Text',
      'celular'                        => 'Text',
      'fax'                            => 'Text',
      'email'                          => 'Text',
      'sitio_web'                      => 'Text',
      'intereses_principales'          => 'Text',
      'area_tematica_interes'          => 'Text',
      'area_experiencia'               => 'Text',
      'proyecto'                       => 'Text',
      'publicacion'                    => 'Text',
		);
	}
}
