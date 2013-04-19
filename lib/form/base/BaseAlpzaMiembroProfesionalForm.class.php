<?php

/**
 * AlpzaMiembroProfesional form base class.
 *
 * @method AlpzaMiembroProfesional getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroProfesionalForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_profesional'   => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre_formal'                  => new sfWidgetFormInputText(),
      'sigla'                          => new sfWidgetFormInputText(),
      'numero_identificacion'          => new sfWidgetFormDate(),
      'ano_ingreso_alpza'              => new sfWidgetFormDate(),
      'nombre'                         => new sfWidgetFormInputText(),
      'apellido'                       => new sfWidgetFormInputText(),
      'profesion'                      => new sfWidgetFormInputText(),
      'trabajo'                        => new sfWidgetFormInputText(),
      'cargo'                          => new sfWidgetFormInputText(),
      'otra_asociacion'                => new sfWidgetFormInputText(),
      'direccion'                      => new sfWidgetFormInputText(),
      'codigo_postal'                  => new sfWidgetFormInputText(),
      'pais'                           => new sfWidgetFormInputText(),
      'telefono_cod_ciudad'            => new sfWidgetFormInputText(),
      'telefono_cod_pais'              => new sfWidgetFormInputText(),
      'telefono'                       => new sfWidgetFormInputText(),
      'celular'                        => new sfWidgetFormInputText(),
      'fax'                            => new sfWidgetFormInputText(),
      'email'                          => new sfWidgetFormInputText(),
      'sitio_web'                      => new sfWidgetFormInputText(),
      'intereses_principales'          => new sfWidgetFormTextarea(),
      'area_tematica_interes'          => new sfWidgetFormTextarea(),
      'area_experiencia'               => new sfWidgetFormTextarea(),
      'proyecto'                       => new sfWidgetFormTextarea(),
      'publicacion'                    => new sfWidgetFormTextarea(),
		));

		$this->setValidators(array(
      'id_alpza_miembro_profesional'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroProfesional()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroProfesional(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sigla'                          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero_identificacion'          => new sfValidatorDate(array('required' => false)),
      'ano_ingreso_alpza'              => new sfValidatorDate(array('required' => false)),
      'nombre'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'apellido'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'profesion'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'trabajo'                        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cargo'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'otra_asociacion'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'codigo_postal'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pais'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono_cod_pais'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'celular'                        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'                          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sitio_web'                      => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'intereses_principales'          => new sfValidatorString(array('required' => false)),
      'area_tematica_interes'          => new sfValidatorString(array('required' => false)),
      'area_experiencia'               => new sfValidatorString(array('required' => false)),
      'proyecto'                       => new sfValidatorString(array('required' => false)),
      'publicacion'                    => new sfValidatorString(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_profesional[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroProfesional';
	}


}
