<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
	->newTable($installer->getTable('drazen_address/address'))
	->addColumn('address_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
		'identity' => true,
		'unsigned' => true,
		'nullable' => false,
		'primary'  => true,
	), 'Id')
	->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => false
	), 'Name')
	->addColumn('address', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => false
	), 'Street Address')
	->addColumn('city', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => false
	), 'City')
	->addColumn('postcode', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => true
	), 'Postcode')
	->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => true
	), 'Phone')
	->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
		'nullable' => true
	), 'Email');
$installer->getConnection()->createTable($table);

$installer->endSetup();