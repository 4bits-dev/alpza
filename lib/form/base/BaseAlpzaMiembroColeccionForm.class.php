<?php

/**
 * AlpzaMiembroColeccion form base class.
 *
 * @method AlpzaMiembroColeccion getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaMiembroColeccionForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_miembro_coleccion'  => new sfWidgetFormInputHidden(),
      'id_alpza_miembro'            => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'numero_especies'             => new sfWidgetFormInputText(),
      'porcentaje_especies_nativas' => new sfWidgetFormInputText(),
      'especies_amenazadas_iucn'    => new sfWidgetFormInputText(),
      'numero_ejemplares'           => new sfWidgetFormInputText(),
		));

		$this->widgetSchema->setLabels(array(
      'id_alpza_miembro' => 'Membrecía',
      'numero_especies' => 'Número de especies',
      'porcentaje_especies_nativas' => 'Porcentaje de especies nativas',
      'especies_amenazadas_iucn' => 'Especies amenazadas IUCN',
      'numero_ejemplares' => 'Número de ejemplares',
		));

		$this->setValidators(array(
      'id_alpza_miembro_coleccion'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaMiembroColeccion()), 'empty_value' => $this->getObject()->getIdAlpzaMiembroColeccion(), 'required' => false)),
      'id_alpza_miembro'            => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'numero_especies'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'porcentaje_especies_nativas' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'especies_amenazadas_iucn'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero_ejemplares'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_miembro_coleccion[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaMiembroColeccion';
	}


}
