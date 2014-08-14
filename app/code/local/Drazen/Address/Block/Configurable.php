<?php

class Drazen_Address_Block_Configurable extends Mage_Core_Block_Template
{
	/**
	 * Select all from drazen_address/address
	 *
	 * @return Varien_Data_Collection_Db
	 */
	public function getAllAddresses()
	{
		$allAddresses = Mage::getModel('drazen_address/address')->getCollection()
			->setOrder('city', 'asc');
		return $allAddresses;
	}

	/**
	 * Select all distinct cities from DB and sort them in array
	 *
	 * @return array
	 */
	public function getDistinctCities()
	{
		$cities = Mage::getModel('drazen_address/address')->getCollection()->getColumnValues('city');
		$cities = array_unique($cities);
		sort($cities);
		return $cities;
	}

	/**
	 * Select all data where city name = $city
	 *
	 * @param $city string
	 * @return $this Varien_Data_Collection_Db
	 */
	public function filterByCity($city)
	{
		$offices = Mage::getModel('drazen_address/address')->getCollection()
			->addFilter('city', $city);
		return $offices;
	}

	public function renderData($allData)
	{
		foreach ($allData as $data) {
			echo $data->getName() . '<br />' .
				$data->getAddress() . ', ' . $data->getPostcode() . ' ' . $data->getCity() . '<br />' .
				$data->getPhone() . '<br />' .
				$data->getEmail() . '<br />';
			echo '<br />';
		}
	}
}