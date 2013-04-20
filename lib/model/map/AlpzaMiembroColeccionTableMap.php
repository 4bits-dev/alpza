<?php


/**
 * This class defines the structure of the 'alpza_miembro_coleccion' table.
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
class AlpzaMiembroColeccionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AlpzaMiembroColeccionTableMap';

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
		$this->setName('alpza_miembro_coleccion');
		$this->setPhpName('AlpzaMiembroColeccion');
		$this->setClassname('AlpzaMiembroColeccion');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ALPZA_MIEMBRO_COLECCION', 'IdAlpzaMiembroColeccion', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ALPZA_MIEMBRO', 'IdAlpzaMiembro', 'INTEGER', 'alpza_miembro', 'ID_ALPZA_MIEMBRO', true, null, null);
		$this->addColumn('NUMERO_ESPECIES', 'NumeroEspecies', 'VARCHAR', false, 45, null);
		$this->addColumn('PORCENTAJE_ESPECIES_NATIVAS', 'PorcentajeEspeciesNativas', 'VARCHAR', false, 45, null);
		$this->addColumn('ESPECIES_AMENAZADAS_IUCN', 'EspeciesAmenazadasIucn', 'VARCHAR', false, 45, null);
		$this->addColumn('NUMERO_EJEMPLARES', 'NumeroEjemplares', 'VARCHAR', false, 45, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AlpzaMiembro', 'AlpzaMiembro', RelationMap::MANY_TO_ONE, array('id_alpza_miembro' => 'id_alpza_miembro', ), null, null);
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

} // AlpzaMiembroColeccionTableMap