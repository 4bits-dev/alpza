<?php

/**
 * AlpzaInformacion form base class.
 *
 * @method AlpzaInformacion getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaInformacionForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_informacion'           => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'mision'                         => new sfWidgetFormTextareaTinyMCE(),
      'vision'                         => new sfWidgetFormTextareaTinyMCE(),
      'aliado'                         => new sfWidgetFormTextareaTinyMCE(),
      'boletin'                        => new sfWidgetFormInputText(),
      'twitter'                        => new sfWidgetFormInputText(),
      'facebook'                       => new sfWidgetFormInputText(),
      'rss'                            => new sfWidgetFormInputHidden(),
      'email'                          => new sfWidgetFormInputText(),
      'descripcion'                    => new sfWidgetFormTextareaTinyMCE(),
      'telefono'                       => new sfWidgetFormInputText(),
      'direccion'                      => new sfWidgetFormInputText(),
      'fax'                            => new sfWidgetFormInputText(),
      'estado'                         => new sfWidgetFormInputHidden(array(), array('value' => '1')),
      'fecha_ingreso'                  => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_edicion'                  => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_publicacion'              => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
		));

		$this->widgetSchema->setLabels(array(
      'alpza_miembro_id_alpza_miembro' => 'Información de:',
      'mision' => 'Misión',
      'vision' => 'Visión',
      'aliado' => 'Aliados',
      'boletin' => 'Boletín',
      'twitter' => 'Dirección de Twitter',
      'facebook' => 'Dirección de Facebook',
      'email' => 'E-Mail de Alpza',
      'descripcion' => 'Descripción',
      'direccion' => 'Dirección',
      'telefono' => 'Teléfono',
      'fecha_edicion' => 'Fecha de Edición',
		));

		$this->setValidators(array(
      'id_alpza_informacion'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaInformacion()), 'empty_value' => $this->getObject()->getIdAlpzaInformacion(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'mision'                         => new sfValidatorString(array('required' => false)),
      'vision'                         => new sfValidatorString(array('required' => false)),
      'aliado'                         => new sfValidatorString(array('required' => false)),
      'boletin'                        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'twitter'                        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'facebook'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'rss'                            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descripcion'                    => new sfValidatorString(array('required' => false)),
      'telefono'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fax'                            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'estado'                         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha_ingreso'                  => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'                  => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'              => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_informacion[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaInformacion';
	}


}
