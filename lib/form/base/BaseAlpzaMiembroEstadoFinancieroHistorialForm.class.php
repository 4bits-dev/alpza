<?php

/**
 * AlpzaMiembroEstadoFinancieroHistorial form base class.
 *
 * @method AlpzaMiembroEstadoFinancieroHistorial getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroEstadoFinancieroHistorialForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_finanzas_historial' => new sfWidgetFormInputHidden(),
      'id_alpza_miembro_finanzas'           => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembroFinanzas', 'add_empty' => false)),
		));

		$this->setValidators(array(
      'id_alpza_miembro_finanzas_historial' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroFinanzasHistorial()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroFinanzasHistorial(), 'required' => false)),
      'id_alpza_miembro_finanzas'           => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembroFinanzas', 'column' => 'id_alpza_miembro_finanzas')),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_estado_financiero_historial[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroEstadoFinancieroHistorial';
	}


}
