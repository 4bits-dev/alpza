<?php

/**
 * AlpzaContenido filter form base class.
 *
 * @package    alpzaDev
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAlpzaContenidoFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
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
      'id_alpza_miembro'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaMiembro', 'column' => 'id_alpza_miembro')),
      'id_alpza_noticia'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaNoticia', 'column' => 'id_alpza_noticia')),
      'id_alpza_evento'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaEvento', 'column' => 'id_alpza_evento')),
      'id_alpza_beca'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaBeca', 'column' => 'id_alpza_beca')),
      'id_alpza_publicacion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaPublicacion', 'column' => 'id_alpza_publicacion')),
      'id_alpza_junta'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaJunta', 'column' => 'id_alpza_junta')),
      'id_alpza_comite'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaComite', 'column' => 'id_alpza_comite')),
      'id_alpza_congreso'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaCongreso', 'column' => 'id_alpza_congreso')),
      'id_alpza_informacion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'AlpzaInformacion', 'column' => 'id_alpza_informacion')),
		));

		$this->widgetSchema->setNameFormat('alpza_contenido_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaContenido';
	}

	public function getFields()
	{
		return array(
      'id_alpza_contenido'   => 'Number',
      'id_alpza_miembro'     => 'ForeignKey',
      'id_alpza_noticia'     => 'ForeignKey',
      'id_alpza_evento'      => 'ForeignKey',
      'id_alpza_beca'        => 'ForeignKey',
      'id_alpza_publicacion' => 'ForeignKey',
      'id_alpza_junta'       => 'ForeignKey',
      'id_alpza_comite'      => 'ForeignKey',
      'id_alpza_congreso'    => 'ForeignKey',
      'id_alpza_informacion' => 'ForeignKey',
		);
	}
}
