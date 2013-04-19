<?php

/**
 * AlpzaMiembroColeccion filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroColeccionFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro'            => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'numero_especies'             => new sfWidgetFormFilterInput(),
      'porcentaje_especies_nativas' => new sfWidgetFormFilterInput(),
      'especies_amenazadas_iucn'    => new sfWidgetFormFilterInput(),
      'numero_ejemplares'           => new sfWidgetFormFilterInput(),
		));

		$this->setValidators(array(
      'id_alpza_miembro'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'numero_especies'             => new sfValidatorPass(array('required' => false)),
      'porcentaje_especies_nativas' => new sfValidatorPass(array('required' => false)),
      'especies_amenazadas_iucn'    => new sfValidatorPass(array('required' => false)),
      'numero_ejemplares'           => new sfValidatorPass(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_coleccion_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroColeccion';
	}

	public function getFields()
	{
		return array(
      'id_alpza_miembro_coleccion'  => 'Number',
      'id_alpza_miembro'            => 'ForeignKey',
      'numero_especies'             => 'Text',
      'porcentaje_especies_nativas' => 'Text',
      'especies_amenazadas_iucn'    => 'Text',
      'numero_ejemplares'           => 'Text',
		);
	}
}
