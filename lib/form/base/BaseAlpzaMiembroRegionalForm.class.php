<?php

/**
 * AlpzaMiembroRegional form base class.
 *
 * @method AlpzaMiembroRegional getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroRegionalForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_regional'      => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre_formal'                  => new sfWidgetFormInputText(),
      'sigla'                          => new sfWidgetFormInputText(),
      'director_nombre'                => new sfWidgetFormInputText(),
      'director_email'                 => new sfWidgetFormInputText(),
      'numero_identificacion'          => new sfWidgetFormInputText(),
      'ano_fundacion'                  => new sfWidgetFormDate(),
      'ano_ingreso_alpza'              => new sfWidgetFormDate(),
      'delegado_nombre'                => new sfWidgetFormInputText(),
      'delegado_apellido'              => new sfWidgetFormInputText(),
      'delegado_profesion'             => new sfWidgetFormInputText(),
      'delegado_cargo'                 => new sfWidgetFormInputText(),
      'delegado_email'                 => new sfWidgetFormInputText(),
      'logo'                           => new sfWidgetFormInputText(),
      'direccion'                      => new sfWidgetFormInputText(),
      'telefono_cod_ciudad'            => new sfWidgetFormInputText(),
      'telefono_cod_pais'              => new sfWidgetFormInputText(),
      'telefono'                       => new sfWidgetFormInputText(),
      'fax'                            => new sfWidgetFormInputText(),
      'celular'                        => new sfWidgetFormInputText(),
      'email'                          => new sfWidgetFormInputText(),
      'sitio_web'                      => new sfWidgetFormInputText(),
      'mision'                         => new sfWidgetFormTextarea(),
      'vision'                         => new sfWidgetFormTextarea(),
      'descripcion'                    => new sfWidgetFormTextarea(),
      'objetivo'                       => new sfWidgetFormTextarea(),
      'proyectos'                      => new sfWidgetFormTextarea(),
      'pais'                           => new sfWidgetFormInputText(),
		));

		$this->setValidators(array(
      'id_alpza_miembro_regional'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroRegional()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroRegional(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre_formal'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sigla'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'director_nombre'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'director_email'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'numero_identificacion'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ano_fundacion'                  => new sfValidatorDate(array('required' => false)),
      'ano_ingreso_alpza'              => new sfValidatorDate(array('required' => false)),
      'delegado_nombre'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_apellido'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_profesion'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_cargo'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'delegado_email'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'logo'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'telefono_cod_ciudad'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono_cod_pais'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'celular'                        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sitio_web'                      => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'mision'                         => new sfValidatorString(array('required' => false)),
      'vision'                         => new sfValidatorString(array('required' => false)),
      'descripcion'                    => new sfValidatorString(array('required' => false)),
      'objetivo'                       => new sfValidatorString(array('required' => false)),
      'proyectos'                      => new sfValidatorString(array('required' => false)),
      'pais'                           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_regional[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroRegional';
	}


}
