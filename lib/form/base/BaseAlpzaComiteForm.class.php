<?php

/**
 * AlpzaComite form base class.
 *
 * @method AlpzaComite getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaComiteForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_comite'   => new sfWidgetFormInputHidden(),
      'id_alpza_miembro'  => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre'            => new sfWidgetFormInputText(),
      'mision'            => new sfWidgetFormTextareaTinyMCE(),
      'vision'            => new sfWidgetFormTextareaTinyMCE(),
      'objetivo'          => new sfWidgetFormTextareaTinyMCE(),
      'informacion'       => new sfWidgetFormTextareaTinyMCE(),
      'email'             => new sfWidgetFormInputText(),
      'coordinador'       => new sfWidgetFormInputText(),
      'email_coordinador' => new sfWidgetFormInputText(),
      'estado'            => new sfWidgetFormInputHidden(),
      'fecha_ingreso'     => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_edicion'     => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
      'fecha_publicacion' => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'))),
		));

		$this->widgetSchema->setLabels(array(
      'id_alpza_miembro' => 'Comité de',
      'nombre' => 'Nombre',
      'mision' => 'Misión',
      'vision' => 'Visión',
      'objetivo' => 'Objetivos',
      'informacion' => 'Información',
      'email' => 'E-Mail del Comité',
      'coordinador' => 'Coordinador',
      'email_coordinador' => 'E-Mail del Coordinador',
      'fecha_edicion' => 'Fecha de Edición',
		));

		$this->setValidators(array(
      'id_alpza_comite'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaComite()), 'empty_value' => $this->getObject()->getIdAlpzaComite(), 'required' => false)),
      'id_alpza_miembro'  => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mision'            => new sfValidatorString(array('required' => false)),
      'vision'            => new sfValidatorString(array('required' => false)),
      'objetivo'          => new sfValidatorString(array('required' => false)),
      'informacion'       => new sfValidatorString(array('required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'coordinador'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email_coordinador' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'estado'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha_ingreso'     => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'     => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion' => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_comite[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaComite';
	}


}
