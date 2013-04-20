<?php


/**
 * This class defines the structure of the 'alpza_evento' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sat Nov 24 15:15:35 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AlpzaEventoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AlpzaEventoTableMap';

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
		$this->setName('alpza_evento');
		$this->setPhpName('AlpzaEvento');
		$this->setClassname('AlpzaEvento');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ALPZA_EVENTO', 'IdAlpzaEvento', 'INTEGER', true, null, null);
		$this->addForeignKey('ALPZA_MIEMBRO_ID_ALPZA_MIEMBRO', 'AlpzaMiembroIdAlpzaMiembro', 'INTEGER', 'alpza_miembro', 'ID_ALPZA_MIEMBRO', true, null, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', false, 100, null);
		$this->addColumn('EXTRACTO', 'Extracto', 'VARCHAR', false, 254, null);
		$this->addColumn('EVENTO', 'Evento', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ESTADO', 'Estado', 'INTEGER', false, null, 1);
		$this->addColumn('FECHA_INGRESO', 'FechaIngreso', 'DATE', false, null, null);
		$this->addColumn('FECHA_EDICION', 'FechaEdicion', 'DATE', false, null, null);
		$this->addColumn('FECHA_PUBLICACION', 'FechaPublicacion', 'DATE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AlpzaMiembro', 'AlpzaMiembro', RelationMap::MANY_TO_ONE, array('alpza_miembro_id_alpza_miembro' => 'id_alpza_miembro', ), null, null);
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

} // AlpzaEventoTableMap
