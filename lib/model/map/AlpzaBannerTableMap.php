<?php


/**
 * This class defines the structure of the 'alpza_banner' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sat Nov 24 15:15:36 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AlpzaBannerTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AlpzaBannerTableMap';

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
		$this->setName('alpza_banner');
		$this->setPhpName('AlpzaBanner');
		$this->setClassname('AlpzaBanner');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ALPZA_BANNER', 'IdAlpzaBanner', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ALPZA_BANNER_TIPO', 'IdAlpzaBannerTipo', 'INTEGER', 'alpza_banner_tipo', 'ID_ALPZA_BANNER_TIPO', true, null, null);
		$this->addColumn('PATH_CONTENIDO', 'PathContenido', 'VARCHAR', false, 200, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', false, 100, null);
		$this->addColumn('FECHA_INGRESO', 'FechaIngreso', 'DATE', false, null, null);
		$this->addColumn('FECHA_EDICION', 'FechaEdicion', 'DATE', false, null, null);
		$this->addColumn('ESTADO', 'Estado', 'INTEGER', false, null, 1);
		$this->addColumn('URL_TRACKING', 'UrlTracking', 'VARCHAR', false, 200, null);
		$this->addColumn('URL_DESTINO', 'UrlDestino', 'VARCHAR', false, 200, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AlpzaBannerTipo', 'AlpzaBannerTipo', RelationMap::MANY_TO_ONE, array('id_alpza_banner_tipo' => 'id_alpza_banner_tipo', ), null, null);
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

} // AlpzaBannerTableMap
