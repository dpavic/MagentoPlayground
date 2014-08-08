<?php

class Drazen_Address_Block_Configurable extends Mage_Core_Block_Template
{
	public function getAllAddresses()
	{
		$allAddresses = Mage::getModel('drazen_address/address')->getCollection()
		->setOrder('city', 'asc');
		return $allAddresses;
	}
}