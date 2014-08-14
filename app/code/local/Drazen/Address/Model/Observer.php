<?php

class Drazen_Address_Model_Observer
{
	/**
	 * Create Link to address/index in top menu
	 *
	 * @param Varien_Event_Observer $observer
	 */
	public function addToTopmenu(Varien_Event_Observer $observer)
	{
		$menu = $observer->getMenu();
		$tree = $menu->getTree();
		$node = new Varien_Data_Tree_Node(array(
			'name' => 'Offices',
			'id' => 'offices',
			'url' => Mage::getUrl('address/index')
		),'id',$tree, $menu);
		$menu->addChild($node);
	}
}