<?php

/**
 * AlpzaNoticia form base class.
 *
 * @method AlpzaNoticia getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaNoticiaForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_noticia'               => new sfWidgetFormInputHidden(),
      'alpza_miembro_id_alpza_miembro' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => false)),
      'nombre'                         => new sfWidgetFormInputText(),
      'extracto'                       => new sfWidgetFormInputText(),
      'noticia'                        => new sfWidgetFormTextareaTinyMCE(),
      'estado'                         => new sfWidgetFormInputCheckbox(),
      'fecha_ingreso'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_edicion'                  => new sfWidgetFormInputHidden(array(),array('value'=>date('m/d/Y'))),
      'fecha_publicacion'              => new sfWidgetFormDate(array(), array('class' => 'span3')),
		));

		$this->widgetSchema->setLabels(array(
      'alpza_miembro_id_alpza_miembro' => 'Membrecía',
      'nombre' => 'Nombre',
      'extracto' => 'Extracto',
      'noticia' => 'Noticia',
      'estado' => 'Estado',
      'fecha_edicion' => 'Fecha de Edición',
      'fecha_publicacion' => 'Fecha de Publicación',
		));

		$this->setValidators(array(
      'id_alpza_noticia'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaNoticia()), 'empty_value' => $this->getObject()->getIdAlpzaNoticia(), 'required' => false)),
      'alpza_miembro_id_alpza_miembro' => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'nombre'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'extracto'                       => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'noticia'                        => new sfValidatorString(array('required' => false)),
      'estado'                         => new sfValidatorBoolean(array('required' => false)),
      'fecha_ingreso'                  => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'                  => new sfValidatorDate(array('required' => false)),
      'fecha_publicacion'              => new sfValidatorDate(array('required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_noticia[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaNoticia';
	}


}
