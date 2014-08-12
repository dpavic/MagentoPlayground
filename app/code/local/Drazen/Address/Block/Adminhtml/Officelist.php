<?php

class Drazen_Address_Block_Adminhtml_Officelist extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	protected function _construct()
	{
		parent::_construct();

		$this->_blockGroup = 'drazen_address_adminhtml';
		$this->_controller = 'officelist';
		$this->_headerText = Mage::helper('drazen_address')->__('List of Offices');
	}
}