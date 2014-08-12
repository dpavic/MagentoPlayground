<?php

class Drazen_Address_Block_Adminhtml_Officelist_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	protected function _construct()
	{
		$this->_blockGroup = 'drazen_address_adminhtml';
		$this->_controller = 'officelist';
		$this->_mode = 'edit';

		$newOrEdit = $this->getRequest()->getParam('id') ? $this->__('Edit') : $this->__('New');

		$this->_headerText = $newOrEdit . ' ' . $this->__('Office');
	}
}