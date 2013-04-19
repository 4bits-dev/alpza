<?php

/**
 * AlpzaBanner form base class.
 *
 * @method AlpzaBanner getObject() Returns the current form's model object
 *
 * @package    alpzaDev
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlpzaBannerForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
      'id_alpza_banner'      => new sfWidgetFormInputHidden(),
      'id_alpza_banner_tipo' => new sfWidgetFormPropelChoice(array('model' => 'AlpzaBannerTipo', 'add_empty' => false)),
      'path_contenido'       => new sfWidgetFormInputFile(),
      'nombre'               => new sfWidgetFormInputText(),
      'fecha_ingreso'        => new sfWidgetFormDate(array(), array('class' => 'span4')),
      'fecha_edicion'        => new sfWidgetFormInputHidden(array(), array('value' => date('m/d/Y'), 'class' => 'span4')),
      'estado'               => new sfWidgetFormInputCheckbox(),
      'url_tracking'         => new sfWidgetFormInputHidden(),
      'url_destino'          => new sfWidgetFormInputText(array(), array('placeholder' => 'http://')),
		));

		$this->widgetSchema->setLabels(array(
      'id_alpza_banner_tipo' => 'Tipo de Banner',
      'nombre'               => 'Nombre de Imagen'
      ));

      $this->setValidators(array(
      'id_alpza_banner'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAlpzaBanner()), 'empty_value' => $this->getObject()->getIdAlpzaBanner(), 'required' => false)),
      'id_alpza_banner_tipo' => new sfValidatorPropelChoice(array('model' => 'AlpzaBannerTipo', 'column' => 'id_alpza_banner_tipo')),
      'path_contenido'       => new sfValidatorFile(array('required' => true,'path'=> sfConfig::get('sf_upload_dir').'/banners','mime_types' => 'web_images')),
      'nombre'               => new sfValidatorString(array('max_length' => 100, 'required' => true)),
      'fecha_ingreso'        => new sfValidatorDate(array('required' => false)),
      'fecha_edicion'        => new sfValidatorDate(array('required' => false)),
      'estado'               => new sfValidatorBoolean(array('required' => false)),
      'url_tracking'         => new sfValidatorUrl(array('required' => false)),
      'url_destino'          => new sfValidatorUrl(array('required' => false)),
      ));

      $this->widgetSchema->setNameFormat('alpza_banner[%s]');

      $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

      parent::setup();
	}

	public function getModelName()
	{
		return 'AlpzaBanner';
	}


}
