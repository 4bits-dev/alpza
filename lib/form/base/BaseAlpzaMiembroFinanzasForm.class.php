<?php

/**
 * AlpzaMiembroFinanzas form base class.
 *
 * @method AlpzaMiembroFinanzas getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroFinanzasForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_finanzas' => new sfWidgetFormInputHidden(),
      'id_alpza_miembro'          => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'cuenta'                    => new sfWidgetFormInputText(),
      'institucion'               => new sfWidgetFormInputText(),
      'direccion'                 => new sfWidgetFormInputText(),
      'email'                     => new sfWidgetFormInputText(),
      'duracion'                  => new sfWidgetFormInputText(),
      'fecha_ingreso'             => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_edicion'             => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_publicacion'         => new sfWidgetFormInputHidden(array(), array('class' => 'span3')),
		));

		$this->widgetSchema->setLabels(array(
      'id_alpza_miembro' => 'Membrecía',
      'fecha_edicion' => 'Fecha de Edición',
      'institucion' => 'Institución',
      'direccion' => 'Dirección',
      'duracion' => 'Duración'
      ));

      $this->setValidators(array(
      'id_alpza_miembro_finanzas' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroFinanzas()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroFinanzas(), 'required' => false)),
      'id_alpza_miembro'          => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'cuenta'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'institucion'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'duracion'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fecha_ingreso'             => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'             => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'         => new sfValidatorDate(array('required' => false)),
      ));

      $this->widgetSchema->setNameFormat('alpza_miembro_finanzas[%s]');

      $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

      parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroFinanzas';
	}


}
