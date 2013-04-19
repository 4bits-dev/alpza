<?php

/**
 * AlpzaMiembroNacionales filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroNacionalesFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'nombre_formal'                  => new sfWidgetFormFilterInput(),
      'sigla'                          => new sfWidgetFormFilterInput(),
      'numero_identificacion'          => new sfWidgetFormFilterInput(),
      'ano_fundacion'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ano_ingreso_alpza'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'director_nombre'                => new sfWidgetFormFilterInput(),
      'director_email'                 => new sfWidgetFormFilterInput(),
      'personal_permanente'            => new sfWidgetFormFilterInput(),
      'personal_temporal'              => new sfWidgetFormFilterInput(),
      'delegado_nombre'                => new sfWidgetFormFilterInput(),
      'delegado_apellido'              => new sfWidgetFormFilterInput(),
      'delegado_profesion'             => new sfWidgetFormFilterInput(),
      'delegado_cargo'                 => new sfWidgetFormFilterInput(),
      'delegado_email'                 => new sfWidgetFormFilterInput(),
      'logo'                           => new sfWidgetFormFilterInput(),
      'direccion'                      => new sfWidgetFormFilterInput(),
      'codigo_postal'                  => new sfWidgetFormFilterInput(),
      'pais'                           => new sfWidgetFormFilterInput(),
      'telefono_cod_ciudad'            => new sfWidgetFormFilterInput(),
      'telefono_cod_pais'              => new sfWidgetFormFilterInput(),
      'telefono'                       => new sfWidgetFormFilterInput(),
      'fax'                            => new sfWidgetFormFilterInput(),
      'celular'                        => new sfWidgetFormFilterInput(),
      'email'                          => new sfWidgetFormFilterInput(),
      'sitio_web'                      => new sfWidgetFormFilterInput(),
      'naturaleza_juridica_publica'    => new sfWidgetFormFilterInput(),
      'naturaleza_juridica_privada'    => new sfWidgetFormFilterInput(),
      'naturaleza_juridica_mixta'      => new sfWidgetFormFilterInput(),
      'propietario'                    => new sfWidgetFormFilterInput(),
      'lucro'                          => new sfWidgetFormFilterInput(),
      'numero_instituciones_miembro'   => new sfWidgetFormFilterInput(),
      'porcentaje_covertura_nacional'  => new sfWidgetFormFilterInput(),
      'lista_instituciones_miembro'    => new sfWidgetFormFilterInput(),
      'estatutos'                      => new sfWidgetFormFilterInput(),
      'organigrama'                    => new sfWidgetFormFilterInput(),
      'otra_asociacion'                => new sfWidgetFormFilterInput(),
      'descripcion'                    => new sfWidgetFormFilterInput(),
      'mision'                         => new sfWidgetFormFilterInput(),
      'vision'                         => new sfWidgetFormFilterInput(),
      'objetivo'                       => new sfWidgetFormFilterInput(),
      'panorama_general'               => new sfWidgetFormFilterInput(),
      'proyectos'                      => new sfWidgetFormFilterInput(),
      'area_trabajo'                   => new sfWidgetFormFilterInput(),
      'considera_apoyo_alpza'          => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorPass(array('required' => false)),
      'sigla'                          => new sfValidatorPass(array('required' => false)),
      'numero_identificacion'          => new sfValidatorPass(array('required' => false)),
      'ano_fundacion'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'ano_ingreso_alpza'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'director_nombre'                => new sfValidatorPass(array('required' => false)),
      'director_email'                 => new sfValidatorPass(array('required' => false)),
      'personal_permanente'            => new sfValidatorPass(array('required' => false)),
      'personal_temporal'              => new sfValidatorPass(array('required' => false)),
      'delegado_nombre'                => new sfValidatorPass(array('required' => false)),
      'delegado_apellido'              => new sfValidatorPass(array('required' => false)),
      'delegado_profesion'             => new sfValidatorPass(array('required' => false)),
      'delegado_cargo'                 => new sfValidatorPass(array('required' => false)),
      'delegado_email'                 => new sfValidatorPass(array('required' => false)),
      'logo'                           => new sfValidatorPass(array('required' => false)),
      'direccion'                      => new sfValidatorPass(array('required' => false)),
      'codigo_postal'                  => new sfValidatorPass(array('required' => false)),
      'pais'                           => new sfValidatorPass(array('required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorPass(array('required' => false)),
      'telefono_cod_pais'              => new sfValidatorPass(array('required' => false)),
      'telefono'                       => new sfValidatorPass(array('required' => false)),
      'fax'                            => new sfValidatorPass(array('required' => false)),
      'celular'                        => new sfValidatorPass(array('required' => false)),
      'email'                          => new sfValidatorPass(array('required' => false)),
      'sitio_web'                      => new sfValidatorPass(array('required' => false)),
      'naturaleza_juridica_publica'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'naturaleza_juridica_privada'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'naturaleza_juridica_mixta'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'propietario'                    => new sfValidatorPass(array('required' => false)),
      'lucro'                          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_instituciones_miembro'   => new sfValidatorPass(array('required' => false)),
      'porcentaje_covertura_nacional'  => new sfValidatorPass(array('required' => false)),
      'lista_instituciones_miembro'    => new sfValidatorPass(array('required' => false)),
      'estatutos'                      => new sfValidatorPass(array('required' => false)),
      'organigrama'                    => new sfValidatorPass(array('required' => false)),
      'otra_asociacion'                => new sfValidatorPass(array('required' => false)),
      'descripcion'                    => new sfValidatorPass(array('required' => false)),
      'mision'                         => new sfValidatorPass(array('required' => false)),
      'vision'                         => new sfValidatorPass(array('required' => false)),
      'objetivo'                       => new sfValidatorPass(array('required' => false)),
      'panorama_general'               => new sfValidatorPass(array('required' => false)),
      'proyectos'                      => new sfValidatorPass(array('required' => false)),
      'area_trabajo'                   => new sfValidatorPass(array('required' => false)),
      'considera_apoyo_alpza'          => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_nacionales_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroNacionales';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_nacionales'    => 'Number',
      'alpza_miembro_id_alpza_miembro' => 'ForeignKey',
      'nombre_formal'                  => 'Text',
      'sigla'                          => 'Text',
      'numero_identificacion'          => 'Text',
      'ano_fundacion'                  => 'Date',
      'ano_ingreso_alpza'              => 'Date',
      'director_nombre'                => 'Text',
      'director_email'                 => 'Text',
      'personal_permanente'            => 'Text',
      'personal_temporal'              => 'Text',
      'delegado_nombre'                => 'Text',
      'delegado_apellido'              => 'Text',
      'delegado_profesion'             => 'Text',
      'delegado_cargo'                 => 'Text',
      'delegado_email'                 => 'Text',
      'logo'                           => 'Text',
      'direccion'                      => 'Text',
      'codigo_postal'                  => 'Text',
      'pais'                           => 'Text',
      'telefono_cod_ciudad'            => 'Text',
      'telefono_cod_pais'              => 'Text',
      'telefono'                       => 'Text',
      'fax'                            => 'Text',
      'celular'                        => 'Text',
      'email'                          => 'Text',
      'sitio_web'                      => 'Text',
      'naturaleza_juridica_publica'    => 'Number',
      'naturaleza_juridica_privada'    => 'Number',
      'naturaleza_juridica_mixta'      => 'Number',
      'propietario'                    => 'Text',
      'lucro'                          => 'Number',
      'numero_instituciones_miembro'   => 'Text',
      'porcentaje_covertura_nacional'  => 'Text',
      'lista_instituciones_miembro'    => 'Text',
      'estatutos'                      => 'Text',
      'organigrama'                    => 'Text',
      'otra_asociacion'                => 'Text',
      'descripcion'                    => 'Text',
      'mision'                         => 'Text',
      'vision'                         => 'Text',
      'objetivo'                       => 'Text',
      'panorama_general'               => 'Text',
      'proyectos'                      => 'Text',
      'area_trabajo'                   => 'Text',
      'considera_apoyo_alpza'          => 'Text',
		);
	}
}
