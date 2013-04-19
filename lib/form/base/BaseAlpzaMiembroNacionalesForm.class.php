<?php

/**
 * AlpzaMiembroNacionales form base class.
 *
 * @method AlpzaMiembroNacionales getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroNacionalesForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_nacionales'    => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre_formal'                  => new sfWidgetFormInputText(),
      'sigla'                          => new sfWidgetFormInputText(),
      'numero_identificacion'          => new sfWidgetFormInputText(),
      'ano_fundacion'                  => new sfWidgetFormDate(),
      'ano_ingreso_alpza'              => new sfWidgetFormDate(),
      'director_nombre'                => new sfWidgetFormInputText(),
      'director_email'                 => new sfWidgetFormInputText(),
      'personal_permanente'            => new sfWidgetFormInputText(),
      'personal_temporal'              => new sfWidgetFormInputText(),
      'delegado_nombre'                => new sfWidgetFormInputText(),
      'delegado_apellido'              => new sfWidgetFormInputText(),
      'delegado_profesion'             => new sfWidgetFormInputText(),
      'delegado_cargo'                 => new sfWidgetFormInputText(),
      'delegado_email'                 => new sfWidgetFormInputText(),
      'logo'                           => new sfWidgetFormInputText(),
      'direccion'                      => new sfWidgetFormInputText(),
      'codigo_postal'                  => new sfWidgetFormInputText(),
      'pais'                           => new sfWidgetFormInputText(),
      'telefono_cod_ciudad'            => new sfWidgetFormInputText(),
      'telefono_cod_pais'              => new sfWidgetFormInputText(),
      'telefono'                       => new sfWidgetFormInputText(),
      'fax'                            => new sfWidgetFormInputText(),
      'celular'                        => new sfWidgetFormInputText(),
      'email'                          => new sfWidgetFormInputText(),
      'sitio_web'                      => new sfWidgetFormInputText(),
      'naturaleza_juridica_publica'    => new sfWidgetFormInputText(),
      'naturaleza_juridica_privada'    => new sfWidgetFormInputText(),
      'naturaleza_juridica_mixta'      => new sfWidgetFormInputText(),
      'propietario'                    => new sfWidgetFormInputText(),
      'lucro'                          => new sfWidgetFormInputText(),
      'numero_instituciones_miembro'   => new sfWidgetFormInputText(),
      'porcentaje_covertura_nacional'  => new sfWidgetFormInputText(),
      'lista_instituciones_miembro'    => new sfWidgetFormTextarea(),
      'estatutos'                      => new sfWidgetFormInputText(),
      'organigrama'                    => new sfWidgetFormInputText(),
      'otra_asociacion'                => new sfWidgetFormTextarea(),
      'descripcion'                    => new sfWidgetFormTextarea(),
      'mision'                         => new sfWidgetFormTextarea(),
      'vision'                         => new sfWidgetFormTextarea(),
      'objetivo'                       => new sfWidgetFormTextarea(),
      'panorama_general'               => new sfWidgetFormTextarea(),
      'proyectos'                      => new sfWidgetFormTextarea(),
      'area_trabajo'                   => new sfWidgetFormTextarea(),
      'considera_apoyo_alpza'          => new sfWidgetFormTextarea(),
		));

		$this->setValidators(array(
      'id_alpza_miembro_nacionales'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroNacionales()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroNacionales(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sigla'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'numero_identificacion'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ano_fundacion'                  => new sfValidatorDate(array('required' => false)),
      'ano_ingreso_alpza'              => new sfValidatorDate(array('required' => false)),
      'director_nombre'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'director_email'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'personal_permanente'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'personal_temporal'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_nombre'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_apellido'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_profesion'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_cargo'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_email'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'logo'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'codigo_postal'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pais'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono_cod_pais'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'celular'                        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sitio_web'                      => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'naturaleza_juridica_publica'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'naturaleza_juridica_privada'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'naturaleza_juridica_mixta'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'propietario'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'lucro'                          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'numero_instituciones_miembro'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'porcentaje_covertura_nacional'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'lista_instituciones_miembro'    => new sfValidatorString(array('required' => false)),
      'estatutos'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'organigrama'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'otra_asociacion'                => new sfValidatorString(array('required' => false)),
      'descripcion'                    => new sfValidatorString(array('required' => false)),
      'mision'                         => new sfValidatorString(array('required' => false)),
      'vision'                         => new sfValidatorString(array('required' => false)),
      'objetivo'                       => new sfValidatorString(array('required' => false)),
      'panorama_general'               => new sfValidatorString(array('required' => false)),
      'proyectos'                      => new sfValidatorString(array('required' => false)),
      'area_trabajo'                   => new sfValidatorString(array('required' => false)),
      'considera_apoyo_alpza'          => new sfValidatorString(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_nacionales[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroNacionales';
	}


}
