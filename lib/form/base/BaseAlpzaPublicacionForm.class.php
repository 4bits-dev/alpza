<?php

/**
 * AlpzaPublicacion form base class.
 *
 * @method AlpzaPublicacion getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaPublicacionForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_publicacion'           => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'id_alpza_publicacion_tipo'      => new sfWidgetFormPropelChoice(array('model' => 'AlpzaPublicacionTipo', 'add_empty' => true)),
      'nombre'                         => new sfWidgetFormInputText(),
      'extracto'                       => new sfWidgetFormInputText(),
      'proyecto'                       => new sfWidgetFormTextareaTinyMCE(),
      'estado'                         => new sfWidgetFormInputCheckBox(),
      'fecha_ingreso'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_edicion'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_publicacion'              => new sfWidgetFormDate(array(), array('class' => 'span3')),
		));

		$this->widgetSchema->setLabels(array(
      'alpza_miembro_id_alpza_miembro' => 'Membrecía',
      'id_alpza_publicacion_tipo' => 'Tipo de Publicación',
      'proyecto' => 'Publicación',
      'fecha_edicion' => 'Fecha de Edición',
      'fecha_publicacion' => 'Fecha de Publicación',
		));

		$this->setValidators(array(
      'id_alpza_publicacion'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaPublicacion()), 'empty_value' => $this->getObject()->getIdAlpzaPublicacion(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'id_alpza_publicacion_tipo'      => new sfValidatorPropelChoice(array('model' => 'AlpzaPublicacionTipo', 'column' => 'id_alpza_publicacion_tipo', 'required' => false)),
      'nombre'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'extracto'                       => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'proyecto'                       => new sfValidatorString(array('required' => false)),
      'estado'                         => new sfValidatorBoolean(),
      'fecha_ingreso'                  => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'                  => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'              => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_publicacion[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaPublicacion';
	}


}
