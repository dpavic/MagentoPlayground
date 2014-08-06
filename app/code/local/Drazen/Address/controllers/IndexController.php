<?php

class Drazen_Address_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$this->loadLayout();
		//print_r($this->generateLayoutBlocks());die();
		$this->renderLayout();
	}

	public function mojametodaAction()
	{
		echo 'test Moja Metoda';
	}
}