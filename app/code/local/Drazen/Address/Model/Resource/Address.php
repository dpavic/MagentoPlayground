<?php

class Drazen_Address_Model_Resource_Address extends Mage_Core_Model_Resource_Db_Abstract
{
	protected function _construct()
	{
		$this->_init('drazen_address/address', 'address_id');
	}
}