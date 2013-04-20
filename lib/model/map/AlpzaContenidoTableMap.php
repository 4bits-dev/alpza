<?php


/**
 * This class defines the structure of the 'alpza_contenido' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sat Oct 20 15:09:54 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AlpzaContenidoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AlpzaContenidoTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('alpza_contenido');
		$this->setPhpName('AlpzaContenido');
		$this->setClassname('AlpzaContenido');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ALPZA_CONTENIDO', 'IdAlpzaContenido', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ALPZA_MIEMBRO', 'IdAlpzaMiembro', 'INTEGER', 'alpza_miembro', 'ID_ALPZA_MIEMBRO', false, null, null);
		$this->addForeignKey('ID_ALPZA_NOTICIA', 'IdAlpzaNoticia', 'INTEGER', 'alpza_noticia', 'ID_ALPZA_NOTICIA', false, null, null);
		$this->addForeignKey('ID_ALPZA_EVENTO', 'IdAlpzaEvento', 'INTEGER', 'alpza_evento', 'ID_ALPZA_EVENTO', false, null, null);
		$this->addForeignKey('ID_ALPZA_BECA', 'IdAlpzaBeca', 'INTEGER', 'alpza_beca', 'ID_ALPZA_BECA', false, null, null);
		$this->addForeignKey('ID_ALPZA_PUBLICACION', 'IdAlpzaPublicacion', 'INTEGER', 'alpza_publicacion', 'ID_ALPZA_PUBLICACION', false, null, null);
		$this->addForeignKey('ID_ALPZA_JUNTA', 'IdAlpzaJunta', 'INTEGER', 'alpza_junta', 'ID_ALPZA_JUNTA', false, null, null);
		$this->addForeignKey('ID_ALPZA_COMITE', 'IdAlpzaComite', 'INTEGER', 'alpza_comite', 'ID_ALPZA_COMITE', false, null, null);
		$this->addForeignKey('ID_ALPZA_CONGRESO', 'IdAlpzaCongreso', 'INTEGER', 'alpza_congreso', 'ID_ALPZA_CONGRESO', false, null, null);
		$this->addForeignKey('ID_ALPZA_INFORMACION', 'IdAlpzaInformacion', 'INTEGER', 'alpza_informacion', 'ID_ALPZA_INFORMACION', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AlpzaMiembro', 'AlpzaMiembro', RelationMap::MANY_TO_ONE, array('id_alpza_miembro' => 'id_alpza_miembro', ), null, null);
		$this->addRelation('AlpzaNoticia', 'AlpzaNoticia', RelationMap::MANY_TO_ONE, array('id_alpza_noticia' => 'id_alpza_noticia', ), null, null);
		$this->addRelation('AlpzaEvento', 'AlpzaEvento', RelationMap::MANY_TO_ONE, array('id_alpza_evento' => 'id_alpza_evento', ), null, null);
		$this->addRelation('AlpzaBeca', 'AlpzaBeca', RelationMap::MANY_TO_ONE, array('id_alpza_beca' => 'id_alpza_beca', ), null, null);
		$this->addRelation('AlpzaPublicacion', 'AlpzaPublicacion', RelationMap::MANY_TO_ONE, array('id_alpza_publicacion' => 'id_alpza_publicacion', ), null, null);
		$this->addRelation('AlpzaJunta', 'AlpzaJunta', RelationMap::MANY_TO_ONE, array('id_alpza_junta' => 'id_alpza_junta', ), null, null);
		$this->addRelation('AlpzaComite', 'AlpzaComite', RelationMap::MANY_TO_ONE, array('id_alpza_comite' => 'id_alpza_comite', ), null, null);
		$this->addRelation('AlpzaCongreso', 'AlpzaCongreso', RelationMap::MANY_TO_ONE, array('id_alpza_congreso' => 'id_alpza_congreso', ), null, null);
		$this->addRelation('AlpzaInformacion', 'AlpzaInformacion', RelationMap::MANY_TO_ONE, array('id_alpza_informacion' => 'id_alpza_informacion', ), null, null);
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // AlpzaContenidoTableMap