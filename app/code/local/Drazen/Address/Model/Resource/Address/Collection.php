<?php

class Drazen_Address_Model_Resource_Address_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
	public function _construct()
	{
		$this->_init('drazen_address/address');
	}
}