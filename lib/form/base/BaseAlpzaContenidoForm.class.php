<?php

/**
 * AlpzaContenido form base class.
 *
 * @method AlpzaContenido getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaContenidoForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_contenido'   => new sfWidgetFormInputHidden(),
      'id_alpza_miembro'     => new sfWidgetFormPropelChoice(array('model' => 'AlpzaMiembro', 'add_empty' => true)),
      'id_alpza_noticia'     => new sfWidgetFormPropelChoice(array('model' => 'AlpzaNoticia', 'add_empty' => true)),
      'id_alpza_evento'      => new sfWidgetFormPropelChoice(array('model' => 'AlpzaEvento', 'add_empty' => true)),
      'id_alpza_beca'        => new sfWidgetFormPropelChoice(array('model' => 'AlpzaBeca', 'add_empty' => true)),
      'id_alpza_publicacion' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaPublicacion', 'add_empty' => true)),
      'id_alpza_junta'       => new sfWidgetFormPropelChoice(array('model' => 'AlpzaJunta', 'add_empty' => true)),
      'id_alpza_comite'      => new sfWidgetFormPropelChoice(array('model' => 'AlpzaComite', 'add_empty' => true)),
      'id_alpza_congreso'    => new sfWidgetFormPropelChoice(array('model' => 'AlpzaCongreso', 'add_empty' => true)),
      'id_alpza_informacion' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaInformacion', 'add_empty' => true)),
		));

		$this->setValidators(array(
      'id_alpza_contenido'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaContenido()), 'empty_value' => $this->getObject()->getIdAlpzaContenido(), 'required' => false)),
      'id_alpza_miembro'     => new sfValidatorPropelChoice(array('model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro', 'required' => false)),
      'id_alpza_noticia'     => new sfValidatorPropelChoice(array('model' => 'AlpzaNoticia', 'column' => 'id_alpza_noticia', 'required' => false)),
      'id_alpza_evento'      => new sfValidatorPropelChoice(array('model' => 'AlpzaEvento', 'column' => 'id_alpza_evento', 'required' => false)),
      'id_alpza_beca'        => new sfValidatorPropelChoice(array('model' => 'AlpzaBeca', 'column' => 'id_alpza_beca', 'required' => false)),
      'id_alpza_publicacion' => new sfValidatorPropelChoice(array('model' => 'AlpzaPublicacion', 'column' => 'id_alpza_publicacion', 'required' => false)),
      'id_alpza_junta'       => new sfValidatorPropelChoice(array('model' => 'AlpzaJunta', 'column' => 'id_alpza_junta', 'required' => false)),
      'id_alpza_comite'      => new sfValidatorPropelChoice(array('model' => 'AlpzaComite', 'column' => 'id_alpza_comite', 'required' => false)),
      'id_alpza_congreso'    => new sfValidatorPropelChoice(array('model' => 'AlpzaCongreso', 'column' => 'id_alpza_congreso', 'required' => false)),
      'id_alpza_informacion' => new sfValidatorPropelChoice(array('model' => 'AlpzaInformacion', 'column' => 'id_alpza_informacion', 'required' => false)),
		));

		$this->widgetSchema->setNameFormat('alpza_contenido[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaContenido';
	}


}
