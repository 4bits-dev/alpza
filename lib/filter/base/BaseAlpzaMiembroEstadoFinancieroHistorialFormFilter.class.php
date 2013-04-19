<?php

/**
 * AlpzaMiembroEstadoFinancieroHistorial filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroEstadoFinancieroHistorialFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_finanzas'           => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembroFinanzas', 'add_empty' => true)),
		));

		$this->setValidators(array(
      'id_alpza_miembro_finanzas'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembroFinanzas', 'column' => 'id_alpza_miembro_finanzas')),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_estado_financiero_historial_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroEstadoFinancieroHistorial';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_finanzas_historial' => 'Number',
      'id_alpza_miembro_finanzas'           => 'ForeignKey',
		);
	}
}
