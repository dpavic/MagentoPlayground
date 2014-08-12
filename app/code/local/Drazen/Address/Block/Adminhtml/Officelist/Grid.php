<?php

class Drazen_Address_Block_Adminhtml_Officelist_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	protected function _prepareCollection()
	{
		$collection = Mage::getResourceModel('drazen_address/address_collection');
		$this->setCollection($collection);

		return parent::_prepareCollection();
	}

	protected function _prepareColumns()
	{
		$this->addColumn('address_id', array(
			'header' => $this->_getHelper()->__('ID'),
			'type'   => 'number',
			'index'  => 'address_id',
		));

		$this->addColumn('name', array(
			'header' => $this->_getHelper()->__('Name'),
			'type'   => 'text',
			'index'  => 'name',
		));

		$this->addColumn('address', array(
			'header' => $this->_getHelper()->__('Address'),
			'type'   => 'text',
			'index'  => 'name',
		));

		$this->addColumn('city', array(
			'header' => $this->_getHelper()->__('City'),
			'type'   => 'text',
			'index'  => 'city',
		));

		$this->addColumn('postcode', array(
			'header' => $this->_getHelper()->__('Postcode'),
			'type'   => 'text',
			'index'  => 'postcode',
		));
		$this->addColumn('phone', array(
			'header' => $this->_getHelper()->__('Phone'),
			'type'   => 'text',
			'index'  => 'phone',
		));
		$this->addColumn('email', array(
			'header' => $this->_getHelper()->__('Email'),
			'type'   => 'text',
			'index'  => 'email',
		));

		$this->addColumn('action', array(
			'header' => $this->_getHelper()->__('Action'),
			'width' => '50px',
			'type' => 'action',
			'actions' => array(
				array(
					'caption' => $this->_getHelper()->__('Edit'),
					'url' => array(
						'base' => 'drazen_address_admin'
							. '/officelist/edit',
					),
					'field' => 'id'
				),
			),
			'filter' => false,
			'sortable' => false,
			'index' => 'address_id',
		));

		return parent::_prepareColumns();

	}

	protected function _getHelper()
	{
		return Mage::helper('drazen_address');
	}


}