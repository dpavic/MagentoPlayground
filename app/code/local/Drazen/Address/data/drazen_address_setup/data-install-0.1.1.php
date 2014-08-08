<?php

/**
 * @var $installer Mage_Core_Model_Resource_Setup
 */
$installer = $this;

$connection = $installer->getConnection();
$installer->startSetup();
$data = array(
	array('Erste', 'Moja Ulica 5', 'Rijeka', '51000', '098/783354', 'mojemail@asda.hr'),
	array('Zagrebacka', 'Tvoja Ulica 5', 'Rijeka', '51000', '098/123456', 'tvojemail@asda.hr'),
	array('Erste', 'Njegova Ulica 5', 'Zagreb', '10000', '091/111111', 'njegovemail@asda.hr'),
	array('PBZ', 'Naša Ulica 5', 'Rijeka', '51000', '098/222222', 'nasemail@asda.hr'),
	array('PBZ', 'Vaša Ulica 5', 'Zagreb', '10000', '098/333333', 'vasemail@asda.hr'),
	array('Erste', 'Njihova Ulica 5', 'Pula', '52000', '098/555555', 'njihovemail@asda.hr')
);
$connection = $installer->getConnection()->insertArray(
	$installer->getTable('drazen_address/address'),
	array('name', 'address', 'city', 'phone', 'postcode', 'email'),
	$data
);

$installer->endSetup();